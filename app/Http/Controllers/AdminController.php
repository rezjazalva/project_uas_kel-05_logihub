<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Asset;
use App\Models\Peminjaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalAssets = Asset::count();
        $Aset = Asset::where('kode_item', 'aset')->count();
        $Ruang = Asset::where('kode_item', 'ruang')->count();
        $totalUsers = User::count();
        $Dosen = User::where('status_posisi', 'dosen')->count();
        $Mahasiswa =User::where('status_posisi', 'mahasiswa')->count();
        $totalPeminjamanSedangDiproses = Peminjaman::where('status', 'diproses')->count();
        $sedangDipinjam = Peminjaman::where('status', 'sedang dipinjam')->count();
        return view('admin.dashboard', compact(
            'totalAssets',
            'totalUsers',
            'totalPeminjamanSedangDiproses',
            'sedangDipinjam',
            'Aset',
            'Ruang',
            'Dosen',
            'Mahasiswa'
        ));
    }
    public function getDataAsetTerpopuler()
    {
        $dataAsetTerpopuler = Peminjaman::select('nama_item', DB::raw('COUNT(*) as total'))
            ->groupBy('nama_item')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        $labels = $dataAsetTerpopuler->pluck('nama_item');
        $totals = $dataAsetTerpopuler->pluck('total');

        return response()->json([
            'labels' => $labels,
            'totals' => $totals,
        ]);
    }

    public function getDataPeminjamanPerBulan()
    {
        $dataPeminjamanPerBulan = Peminjaman::select(
            DB::raw("DATE_FORMAT(tanggal_pinjam, '%Y-%m') as month"),
            DB::raw('COUNT(*) as total')
        )
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $months = $dataPeminjamanPerBulan->pluck('month')->map(function ($month) {
            return Carbon::parse($month)->format('M Y');
        });

        $totals = $dataPeminjamanPerBulan->pluck('total');

        return response()->json([
            'months' => $months,
            'totals' => $totals,
        ]);
    }

    public function dashboardAdmin(Request $request)
    {
        $searchQuery = $request->input('search');
        // Fetch the $peminjamans data from your database (you may have a different query here)
        $peminjamans = Peminjaman::query();
        $peminjamans->whereHas('user', function ($query) use ($searchQuery) {
            $query->where('name', 'like', '%' . $searchQuery . '%');
        });

        $peminjamans = $peminjamans->paginate(10);
        // Pass the $peminjamans data to the view
        return view('admin.permohonan', ['peminjamans' => $peminjamans]);
    }

    public function showAsset(Request $request)
    {
        $searchQuery = $request->input('search');

        $assets = Asset::query();

        // Lakukan pencarian berdasarkan nama item jika input pencarian diisi
        if ($searchQuery) {
            $assets->where('nama_item', 'like', '%' . $searchQuery . '%');
        }

        $assets = $assets->get(); 

        return view('admin.daftar_aset', compact('assets'));
    }

    public function showRuang(Request $request)
    {
        $searchQuery = $request->input('search');

        $assets = Asset::query();

        // Lakukan pencarian berdasarkan nama item jika input pencarian diisi
        if ($searchQuery) {
            $assets->where('nama_item', 'like', '%' . $searchQuery . '%');
        }
        $assets->where('kode_item', 'ruang');

        $assets = $assets->get(); 

        return view('admin.daftar_ruang', compact('assets'));
    }

    public function showUser(Request $request)
    {
        $searchQuery = $request->input('search');

        $users = User::query();

        // Lakukan pencarian berdasarkan nama item jika input pencarian diisi
        if ($searchQuery) {
            $users->where('name', 'like', '%' . $searchQuery . '%');
        }

        $users = $users->paginate(10);

        return view('admin.profil_pengguna', compact('users'));
    }

    public function showAdmin(Request $request)
    {
        $searchQuery = $request->input('search');

        $admins = Admin::query();

        // Lakukan pencarian berdasarkan nama item jika input pencarian diisi
        if ($searchQuery) {
            $admins->where('name', 'like', '%' . $searchQuery . '%');
        }

        $admins = $admins->paginate(10);

        return view('admin.profil_admin', compact('admins'));
    }

    public function destroy(Peminjaman $peminjaman)
    {
        // Hapus item berdasarkan parameter yang diambil dari route
        $peminjaman->delete();

        return redirect()->route('admin.permohonan')->with('success', 'Item successfully deleted');
    }

    public function destroyUser(User $user)
    {
        // Hapus item berdasarkan parameter yang diambil dari route
        $user->delete();

        return redirect()->route('admin.profil-pengguna')->with('success', 'Item successfully deleted');
    }
}
