<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{

    public function index(Request $request)
    {
        $searchQuery = $request->input('search');

        $assets = Asset::query();

        // Lakukan pencarian berdasarkan nama item jika input pencarian diisi
        if ($searchQuery) {
            $assets->where('nama_item', 'like', '%' . $searchQuery . '%');
        }

        $assets = $assets->paginate(10);

        return view('admin.daftar-aset', compact('assets'));
    }

    public function getAssetsByJenisItem(Request $request)
    {
        $jenisItem = $request->query('kode_item');

        // Ambil data aset berdasarkan jenis item dan stok lebih besar dari 0 dari database
        $assets = Asset::where('kode_item', $jenisItem)->where('stok_item', '>', 0)->get();

        return response()->json($assets);
    }

    public function create()
    {
        return view('admin.tambah_aset');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'nama_item' => 'required|string|max:255',
            'jenis_item' => 'required|string|max:255',
            'kode_item' => 'required|string|max:255',
            'stok_item' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan jenis gambar yang diizinkan dan ukuran maksimal
        ]);

        // Menyimpan gambar dengan nama tetap
        $imageName = $request->image->getClientOriginalName();
        $request->image->move('assets/img/portfolio/', $imageName);
        // Buat data aset baru dan simpan ke database
        $asset = new Asset([
            'nama_item' => $request->nama_item,
            'jenis_item' => $request->jenis_item,
            'kode_item' => $request->kode_item,
            'stok_item' => $request->stok_item,
            'image_path' => '/assets/img/portfolio/' . $imageName,
        ]);
        $asset->save();

        // Redirect ke halaman daftar aset atau halaman lain jika diperlukan
        return redirect()->route('admin.daftar-aset')->with('success', 'Aset berhasil ditambahkan.');
    }

    public function destroy(Asset $aset)
    {
        // Hapus aset berdasarkan ID
        $aset->delete();

        // Redirect kembali ke halaman daftar aset dengan pesan berhasil
        return redirect()->route('admin.daftar-aset')->with('success', 'Aset berhasil dihapus.');
    }

    public function edit(Asset $aset)
    {
        // Tampilkan halaman edit dan lewatkan data asset ke view
        return view('admin.edit_aset', compact('aset'));
    }

    public function update(Request $request, Asset $asset)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'nama_item' => 'required|string|max:255',
            'jenis_item' => 'required|string|max:255',
            'kode_item' => 'required|string|max:255',
            'stok_item' => 'required|integer',
            // Tambahkan validasi untuk atribut lain yang ingin Anda sunting
        ]);

        // Update data aset dengan data yang diterima dari form
        $asset->update([
            'nama_item' => $request->nama_item,
            'jenis_item' => $request->jenis_item,
            'kode_item' => $request->kode_item,
            'stok_item' => $request->stok_item,
            // Tambahkan atribut lain yang ingin Anda sunting
        ]);

        // Redirect ke halaman daftar aset atau halaman lain jika diperlukan
        return redirect()->route('admin.daftar-aset')->with('success', 'Aset berhasil diperbarui.');
    }

}
