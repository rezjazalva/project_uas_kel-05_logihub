@extends('layouts.app')

@section('content')
<style type="text/css">
    @import url("../assets/css/service.css");
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


<main id="main">

    <!-- Section Service -->
    <section id="service" class="service">
        <div class="container">
            <div class="row text-center justify-content-center">
                <h3>Layanan Kami</h3>
                <h2 style="font-weight:400">Temukan Keandalan dan Kemudahan</h2>
                <h2 style=" margin-bottom: 80px;">Dengan Fleksibilitas Peminjaman</h2>
            </div>
            <!-- Layanan -->
            <div class="container-row row g-0 mx-4 gap-5 ">

                <!-- Peminjaman Aset -->
                <div class="col ser-cont">
                    <div class="row serv">
                        <!-- Icon -->
                        <div class="col-4" style="padding: 25px 31px">
                            <div class="cont-icon d-flex justify-content-center align-items-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <iconify-icon icon="ri:box-3-fill" class="fa-lg text-light"></iconify-icon>
                                </div>
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="col-8" style="padding:30px; background:white; border-radius: 0px 10px 10px 0px">
                            <h3 class="dec-head">Peminjaman Aset</h3>
                            <p class="dec-par">Kami memberikan solusi untuk kebutuhan logistik melalui peminjaman yang bersifat fleksibel dan transparan.</p>
                        </div>
                    </div>
                </div>

                <!-- Pemeliharaan Aset -->
                <div class="col ser-cont">
                    <div class="row serv">
                        <!-- Icon -->
                        <div class="col-4" style="padding: 25px 31px">
                            <div class="cont-icon d-flex justify-content-center align-items-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <i class="bi bi-tools fa-xl text-light"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="col-8" style="padding:30px; background:white; border-radius: 0px 10px 10px 0px">
                            <h3 class="dec-head">Pemeliharaan Aset</h3>
                            <p class="dec-par">Kami berkonsisten untuk memperhatikan kualitas aset melalui pemeliharaan dan pemeriksaan secara rutin.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Section Service -->

    <!-- Section List Asset -->
    <section id="list-asset" class="list-asset">
        <div class="container">

            <!-- Header -->
            <div class="row mx-4 g-0 gap-2 text-center justify-content-center">
                <h3>Jenis Item</h3>
                <h2 style="font-weight:400;">Kami Menyediakan Item Peminjaman</h2>
                <h2>Secara Lengkap Dan Berkualitas</h2>
                <div class="line"></div>
            </div>

            <!-- Content -->
            <div class="row mx-4 g-0">
                <div class="cont-tab d-flex align-items-start ">
                    <!-- Tab -->
                    <div class="col-3">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="tab nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true" style="margin-bottom:10px">Daftar Aset</button>
                            <button class="tab nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Daftar Ruang</button>
                        </div>
                    </div>

                    @php
                    $items = \App\Models\Asset::all();
                    @endphp

                    <!-- Desc -->
                    <div class="col-9">
                        <!-- Description -->
                        <div class="tab-content" id="v-pills-tabContent">

                            <!-- Aset -->
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" style="padding-left:8px">

                                <!-- Header -->
                                <div class="row" data-aos="fade-up" data-aos-delay="100">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <ul id="portfolio-flters">
                                            <li data-filter="*" class="filter-active">Semua</li>
                                            @php
                                            $categories = \App\Models\Asset::pluck('jenis_item')->unique();
                                            @endphp
                                            @foreach ($categories as $jenis_item)
                                            @if(strtolower($jenis_item) !== 'ruangan')
                                            <li data-filter=".filter-{{ strtolower($jenis_item) }}">{{ $jenis_item }}</li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Image -->
                                <div class="row gy-3 gx-3 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                                    @foreach ($items as $item)
                                    @if (strtolower($item->jenis_item) !== 'ruangan')
                                    <div class="col-lg-3 col-md-6 portfolio-item filter-{{ strtolower($item->jenis_item) }}">
                                        <div class="portfolio-wrap">
                                            <!-- Ganti sumber gambar dengan path gambar dari database -->
                                            <img src="{{ asset($item->image_path) }}" class="img-fluid" alt="{{ $item->nama_item }}">
                                            <div class="portfolio-info">
                                                <h4>{{ $item->nama_item }}</h4>
                                                <p>Stok: {{ $item->stok_item }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div><!-- End Asset -->
                        </div><!--End Container-->


                        <!-- Description -->
                        <div class="tab-content" id="v-pills-tabContent">

                            <!-- Aset -->
                            <div class="tab-pane fade show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" style="padding-left:8px">

                                <!-- Image -->
                                <div class="row gy-3 gx-3 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                                    <!-- Aula -->
                                    <div class="col-lg-12 filter-desc">
                                        <div class="room row">
                                            <!-- Image -->
                                            <div class="col-4">
                                                <img src="assets/img/portfolio/aula.jpg" alt="aula">
                                            </div>
                                            <!-- Description -->
                                            <div class="col-8" style="padding-left:45px">
                                                <h3>Ruang Aula</h3>
                                                <p>Ruang aula merupakan fasilitas penting yang digunakan untuk berbagai kegiatan baik akademik maupun non-akademik. Ruang ini dirancang untuk memiliki kapasitas yang besar dan dapat menampung peserta dalam jumlah yang banyak. Hal ini cukup ideal untuk menyelenggarakan kegiatan berskala besar.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Kelas -->
                                    <div class="col-lg-12 filter-class1">
                                        <div class="room row">
                                            <!-- Image -->
                                            <div class="col-4">
                                                <img src="assets/img/portfolio/kelas.jpg" alt="aula">
                                            </div>
                                            <!-- Description -->
                                            <div class="col-8" style="padding-left:45px">
                                                <h3>Ruang Kelas</h3>
                                                <p>Ruang kelas juga merupakan suatu fasilitas penting yang dapat digunakan untuk penyelenggaraan kegiatan akademik maupun non-akademik. Ruang ini juga dilengkapi beberapa fasilitas tetap untuk mendukung aktivitas operasional. Jumlah keseluruhan dari ruang ini adalah 16 pada setiap lantai.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Asset -->
                        </div><!--End Container-->




                    </div>
                </div>
            </div>
        </div><!-- End Container -->
    </section><!-- End Section -->

    <section id="cta-ser" class="cta-ser">
        <div class="container">

            <div class="cont-cta row mx-4 g-0 d-flex align-items-center">
                <!-- Text -->
                <div class="col">
                    <h2>Bingung mencari aset sesuai kebutuhan Anda
                        <span>?</span>
                    </h2>
                </div>

                <!-- Button 1 -->
                <div class="btn col" style="padding-left:5px; border-color:transparent">
                    <a href="{{url('/form-pinjam')}}" class="btn-get-started scrollto">Pinjam Sekarang</a>
                    <a href="{{route('user.status_pinjam')}}" class="status btn-get-started scrollto">Lihat Status</a>
                </div>

            </div>

        </div><!-- End Container -->
    </section><!-- End Section -->

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