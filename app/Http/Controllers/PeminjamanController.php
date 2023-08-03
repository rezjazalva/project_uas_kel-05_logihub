<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PeminjamanController extends Controller
{

    public function showStatusPeminjaman()
    {
        $user = Auth::user();
        $peminjamans = $user->peminjamans;

        return view('users.status_pinjam', compact('peminjamans'));
    }

    public function storePeminjaman(Request $request)
    {
        $request->validate([
            'kode_item' => 'required|in:aset,ruang',
            'nama_item' => 'required|string',
            'jumlah' => 'required|integer',
            'tujuan' => 'required|string',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
            'bukti_peminjaman' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048', // Aturan untuk file bukti peminjaman (opsional)
        ]);

        // Cek stok item sebelum menyimpan peminjaman
        $asset = Asset::where('kode_item', $request->kode_item)->where('nama_item', $request->nama_item)->first();
        if (!$asset) {
            return redirect()->route('user.form_pinjam')->with('error', 'Aset tidak ditemukan.');
        }

        if ($request->jumlah > $asset->stok_item) {
            return redirect()->route('user.form_pinjam')->with('error', 'Jumlah yang dipilih melebihi stok yang tersedia.');
        }

        // Simpan data peminjaman ke database
        $peminjaman = new Peminjaman();
        $peminjaman->user_id = auth()->user()->id;
        $peminjaman->kode_item = $request->kode_item;
        $peminjaman->nama_item = $request->nama_item;
        $peminjaman->jumlah = $request->jumlah;
        $peminjaman->tujuan = $request->tujuan;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->tanggal_kembali = $request->tanggal_kembali;
        $peminjaman->status = 'diproses'; // Set status awal menjadi 'diproses'

        $peminjaman->save();

        $asset->stok_item -= $peminjaman->jumlah;
        $asset->save();

        $this->generateInvoice($peminjaman->id);

        return redirect()->route('user.status_pinjam')->with('success', 'Peminjaman berhasil diajukan!');
    }

    public function generateInvoice($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        // Tampilkan data peminjaman dalam template invoice.blade.php
        $data = [
            'peminjaman' => $peminjaman,
        ];

        // Load the view
        $html = View::make('invoice', $data)->render();

        // Create options and set paper size to A4
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->setDefaultPaperOrientation('A4');

        // Create a PDF instance and render the HTML
        $pdf = new Dompdf($options);
        $pdf->loadHtml($html);

        // Render the PDF
        $pdf->render();

        // Save the PDF to the 'invoices' directory in the storage/app
        $fileName = 'invoice_' . $peminjaman->id . '.pdf';
        Storage::disk('local')->put('invoices/' . $fileName, $pdf->output());

        // Update the 'invoice' column in the database
        $peminjaman->invoice = $fileName;
        $peminjaman->save();
    }

    public function downloadInvoice($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        if ($peminjaman->status === 'disetujui' && !empty($peminjaman->invoice)) {
            $filePath = 'invoices/' . $peminjaman->invoice;
            return Storage::download($filePath);
        } else {
        }
    }

    public function batalPeminjaman($id)
    {

        $peminjaman = Peminjaman::findOrFail($id);

        // Kembalikan stok aset hanya jika status peminjaman adalah "pending"
        if ($peminjaman->status === 'diproses') {
            $asset = Asset::where('kode_item', $peminjaman->kode_item)->where('nama_item', $peminjaman->nama_item)->first();

            if ($asset) {
                $asset->stok_item += $peminjaman->jumlah;
                $asset->save();
            }
        }

        $peminjaman->delete();

        return redirect()->route('user.status_pinjam')->with('success', 'Peminjaman berhasil dibatalkan dan stok telah dikembalikan!');
    }

    public function edit($id)
    {
        // Ambil data item yang dipilih berdasarkan ID
        $item = Peminjaman::find($id);

        // Tampilkan halaman edit dan lewatkan data item ke view
        return view('admin.form_edit_status', compact('item'));
    }

    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima dari form


        $messages = [
            'required' => ':Attribute harus diisi.',
            'status' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'status' => 'required',

        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = Peminjaman::findOrFail($id);

        $item->status = $request->status;
        $item->save();

        if ($item->status === 'dikembalikan') {

            $asset = Asset::where('kode_item', $item->kode_item)->where('nama_item', $item->nama_item)->first(); // Cari aset berdasarkan nama_item
            if ($asset) {
                $asset->stok_item += $item->jumlah; // Atau sesuai dengan penambahan stok yang sesuai dengan peminjaman
                $asset->save();
            }
        }

        return redirect()->route('admin.permohonan');
    }
    // ...
}
