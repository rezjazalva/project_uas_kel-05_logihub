<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use Database\Seeders\AssetSeeder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/data-aset-terpopuler', [AdminController::class, 'getDataAsetTerpopuler'])->name('admin.data.aset.terpopuler');
    Route::get('/data-peminjaman-per-bulan', [AdminController::class, 'getDataPeminjamanPerBulan'])->name('admin.data.peminjaman.perbulan');



    Route::get('/permohonan', [AdminController::class, 'dashboardAdmin'])->name('admin.permohonan');
    Route::get('/dashboard/permohonan/search', [AdminController::class, 'search'])->name('admin.permohonan.search');
    Route::delete('/admin/permohonan/{peminjaman}', [AdminController::class, 'destroy'])->name('admin.permohonan.destroy');
    // web.php
    Route::get('/admin/permohonan/edit/{id}', [PeminjamanController::class, 'edit'])->name('admin.permohonan.edit');
    Route::post('/admin/permohonan/update/{id}', [PeminjamanController::class, 'update'])->name('admin.permohonan.update');

    Route::get('admin/asset/create', [AssetController::class, 'create'])->name('admin.asset.create');
    Route::post('admin/asset',  [AssetController::class, 'store'])->name('admin.asset.store');
    Route::delete('/admin/daftar-aset/{aset}', [AssetController::class, 'destroy'])->name('admin.aset.destroy');

    Route::get('/admin/aset/{aset}/edit', [AssetController::class, 'edit'])->name('admin.aset.edit');
    Route::put('/admin/aset/{asset}', [AssetController::class, 'update'])->name('admin.aset.update');

    Route::get('/daftar-aset', [AdminController::class, 'showAsset'])->name('admin.daftar-aset');
    Route::get('/daftar-ruang', [AdminController::class, 'showRuang'])->name('admin.daftar-ruang');

  

    Route::get('/profil-pengguna', [AdminController::class, 'showUser'])->name('admin.profil-pengguna');
    Route::delete('/admin/profil-pengguna/{user}', [AdminController::class, 'destroyUser'])->name('admin.profil-pengguna.destroy');

    Route::get('/profil-admin', [AdminController::class, 'showAdmin'])->name('admin.profil-admin');

    Route::get('/pesan', function () {
        return view('admin.pesan');
    })->name('admin.pesan');


});

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('users.home-user');
    })->name('user.dashboard');



    Route::get('/form-pinjam', function () {
        return view('users.form_pinjam');
    })->name('user.form_pinjam');

 

    Route::get('/status-peminjaman', [PeminjamanController::class, 'showStatusPeminjaman'])->name('user.status_pinjam');

    // Add other routes for user here
});

Route::get('/layanan', function () {
    return view('users.layanan');
})->name('user.layanan');

Route::get('/kontak', function () {
    return view('users.kontak');
})->name('user.kontak');

Route::get('/pesan/create', [PesanController::class, 'create'])->name('pesan.create');
Route::post('/pesan/store', [PesanController::class, 'store'])->name('pesan.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// web.php

Route::get('/login/user', [AuthenticatedSessionController::class, 'showUserLoginForm'])->name('user.login');
Route::post('/peminjam-login', [AuthenticatedSessionController::class, 'userLogin'])->name('peminjam.login');

Route::get('/login/admin', [AuthenticatedSessionController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/pegawai-login', [AuthenticatedSessionController::class, 'adminLogin'])->name('pegawai.login');

Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
Route::post('/user/logout', [AuthenticatedSessionController::class, 'destroy'])->name('user.logout');

Route::get('/get-assets-by-jenis-item', [AssetController::class, 'getAssetsByJenisItem'])->name('get.assets.by.jenis.item');

Route::get('generate-invoice/{id}', [PeminjamanController::class, 'generateInvoice'])->name('generate.invoice');
Route::post('/store-peminjaman', [PeminjamanController::class, 'storePeminjaman'])->name('store.peminjaman');
Route::get('download-invoice/{id}', [PeminjamanController::class, 'downloadInvoice'])->name('download.invoice');

Route::delete('/batal-peminjaman/{id}', [PeminjamanController::class, 'batalPeminjaman'])->name('batal.peminjaman');


require __DIR__ . '/auth.php';
