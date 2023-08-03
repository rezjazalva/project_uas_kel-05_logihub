<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function create()
    {
        return view('users.kontak');
    }

    public function store(Request $request)
    {
        // Validasi data pesan yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        // Simpan data pesan ke dalam tabel pesan
        Pesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);

        // Redirect ke halaman sukses atau halaman lain yang diinginkan
        return redirect()->route('users.kontak')->with('success', 'Pesan berhasil dikirim!');
    }
}
