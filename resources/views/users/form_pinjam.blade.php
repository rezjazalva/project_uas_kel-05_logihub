@extends('layouts.app')

@section('content')
<style type="text/css">
    @import url("../assets/css/form-pinjam.css");
</style>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">

    <div class="container d-flex align-items-center justify-content-between">
        <!-- Brand Identity -->
        <div class="container-brand d-flex align-items-center gap-3">
            <!-- Logo -->
            <div class="logo-box d-flex align-items-center justify-content-center">
                <img src="assets/img/uim_box.png" alt="box">
            </div>
            <!-- Brand -->
            <h1 class="logo"><a href="index.html">Logi<span>Hub</span></a></h1>
        </div>

        <!-- Menu -->
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{url('/')}}">Beranda</a></li>
                <li><a class="nav-link scrollto active" href="{{route('user.layanan')}}">Layanan</a></li>
                <li><a class="nav-link scrollto" href="{{route('user.kontak')}}">Kontak</a></li>
                @auth
                <li class="user-dropdown">
                    <a class="nav-link scrollto" id="userDropdown">
                        {{ Auth::user()->name }} <i class="bi bi-caret-down-fill"></i>
                    </a>
                    <ul id="dropdownContent">
                        <li>
                            <div id="logoutFloatingBox">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="logout nav-link scrollto btn btn-link">
                                        <p>Log Out</p>
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                @else
                @if (Route::has('login'))
                <li>
                    <a href="{{ route('user.login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log In</a>
                </li>
                @endif
                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                </li>
                @endif
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<!-- New Header -->
<section id="new-header" class="new-header">
    <div class="container-fluid">

        <div class="container">
            <ul class="gap-3">
                <li><a class="nav-link scrollto active" href="{{url('/form-pinjam')}}">Formulir Peminjaman</a></li>
                <li><a class="nav-link scrollto" href="{{route('user.status_pinjam')}}">Status Peminjaman</a></li>
            </ul>
        </div>

    </div>
</section>

<main id="main">

    <!-- Form -->
    <section id="form" class="form">
        <div class="container">

            <div class="row text-center">
                <h3>Formulir</h3>
                <h2>Peminjaman Aset Logistik</h2>
            </div>

            <div class="cont-form row mx-5">
                <div class="wrap-font">

                    <!-- Title -->
                    <div class="title-form text-center"></div>

                    <!-- Content -->
                    <div class="content-form">

                        <!-- Header -->
                        <div class="header-form text-center">
                            <h3>Silahkan isi formulir di bawah ini secara lengkap dan tepat</h3>
                        </div>

                        <!-- Description -->
                        <div class="desc-form">

                            <!-- Form -->
                            <form method="POST" action="{{ route('store.peminjaman') }}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <!-- Jenis Item & Nama Item -->
                                <div class="row mb-3">
                                    <!-- Jenis Item -->
                                    <div class="col">
                                        <label for="kode_item">Jenis Item</label>
                                        <select id="kode_item" class="form-select @error('kode_item') is-invalid @enderror" aria-label="Default select example" name="kode_item" value="{{ old('kode_item') }}" required autocomplete="off" autofocus>
                                            <option selected></option>
                                            <option value="aset">Aset</option>
                                            <option value="ruang">Ruang</option>
                                        </select>
                                        @error('kode_item')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- Nama Item -->
                                    <div class="col">
                                        <label for="nama_item">Nama Item</label>
                                        <select id="nama_item" class="form-select @error('nama_item') is-invalid @enderror" name="nama_item" value="{{ old('nama_item') }}" required autocomplete="off" autofocus>
                                            <option selected></option>
                                        </select>
                                        @error('nama_item')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Jumlah -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="jumlah">Jumlah Peminjaman Item</label>
                                        <input id="jumlah" type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah') }}" required autocomplete="off" autofocus>
                                        @error('jumlah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Tujuan Peminjaman -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="tujuan">Tujuan Peminjaman</label>
                                        <input id="tujuan" type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" value="{{ old('tujuan') }}" required autocomplete="off" autofocus>
                                        @error('tujuan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Tanggal -->
                                <div class="row mb-3">
                                    <!-- Tanggal Pinjam -->
                                    <div class="col">
                                        <label for="tanggal_pinjam">Tanggal Peminjaman</label>
                                        <input id="tanggal_pinjam" type="date" class="form-control @error('tanggal_pinjam') is-invalid @enderror" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}" required autocomplete="off" autofocus>
                                        @error('tanggal_pinjam')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <!-- Tanggal Kembali -->
                                    <div class="col">
                                        <label for="tanggal_kembali">Tanggal Pengembalian</label>
                                        <input id="tanggal_kembali" type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror" name="tanggal_kembali" value="{{ old('tanggal_kembali') }}" required autocomplete="off" autofocus>
                                        @error('tanggal_kembali')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="row mt-5 mb-2 mx-4">
                                    <div class="col d-flex justify-content-center">
                                        <button type="submit">Pinjam Sekarang</button>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>

        </div><!-- End Container -->
    </section><!--  End Section -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const jenisItemSelect = document.getElementById("kode_item");
            const namaItemSelect = document.getElementById("nama_item");

            jenisItemSelect.addEventListener("change", function() {
                const jenisItem = jenisItemSelect.value;
                namaItemSelect.innerHTML = ""; // Bersihkan semua opsi nama item

                if (jenisItem !== "") {
                    fetch(`/get-assets-by-jenis-item?kode_item=${jenisItem}`)
                        .then((response) => response.json())
                        .then((data) => {
                            data.forEach((asset) => {
                                const optionElement = document.createElement("option");
                                optionElement.value = asset.nama_item; // Ubah dari asset.jenis_item menjadi asset.nama_item
                                optionElement.textContent = asset.nama_item; // Ubah dari asset.jenis_item menjadi asset.nama_item
                                namaItemSelect.appendChild(optionElement);
                            });
                        })
                        .catch((error) => {
                            console.error("Error:", error);
                        });
                }
            });
        });
    </script>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid g-0">

        @endsection

        <style>
            /* Sembunyikan dropdownContent secara default */
            /* Sembunyikan dropdownContent secara default */
            #dropdownContent {
                display: none;
            }

            #logoutFloatingBox .logout p {
                padding: 5px 8px;
                border-radius: 5px;
                background: #208cff;
                margin-bottom: 0;
            }

            /* Tampilan untuk logout melayang */
            #logoutFloatingBox {
                position: absolute;
                color: white;
                right: 5px;
                /* Sesuaikan posisi horizontal logout */
                border-radius: 10px;
                margin-bottom: 0px;
                padding: 5px 10px;
                z-index: 9999;
                /* Pastikan logout melayang berada di atas konten lainnya */
                display: none;
                /* Sembunyikan logout secara default */
                margin: 0;
            }
        </style>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="assets/js/logout.js"></script>