@extends('layouts.app')

@section('content')
<style type="text/css">
  @import url("../assets/css/contact.css");
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
        <li><a class="nav-link scrollto" href="{{route('user.layanan')}}">Layanan</a></li>
        <li><a class="nav-link scrollto active" href="{{route('user.kontak')}}">Kontak</a></li>
        @auth
        <li>
          <a class="nav-link scrollto">
            Halo, {{ Auth::user()->name }}
          </a>
        </li>
        <li>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <a href="">
              <button type="submit" class="nav-link scrollto" class="btn btn-link">Log Out</button>
            </a>
          </form>
        </li>
        @else
        @if (Route::has('login'))
        <li>
          <a href="{{ route('user.login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
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
        <h3>Hubungi Kami</h3>
        <h2 style="font-weight:400">Kami Berdedikasi Untuk Selalu Sedia</h2>
        <h2 style=" margin-bottom: 80px;">Melayani Anda Sepenuh Hati</h2>
      </div>
    </div>
  </section><!-- End Section Service -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <div class="row gy-4 justify-content-center">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <div class="cont-i">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <h3>Alamat</h3>
                <p>Jl. Ketintang No. 156<br>Surabaya, Indonesia</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <div class="cont-i">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <h3>Telepon</h3>
                <p>+62 899 3415 875<br>+62 889 7451 368</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <div class="cont-i">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <h3>Email</h3>
                <p class="email">info<span>@</span>logihub.com<br>contact<span>@</span>logihub.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <div class="cont-i">
                  <i class="bi bi-clock-fill"></i>
                </div>
                <h3>Operasional</h3>
                <p>Senin - Jumat<br>09:00 WIB - 16:00 WIB</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="" method="post" class="php-email-form">
            <div class="row gy-4">

              <!-- Header -->
              <div class="col-md-12 header-form text-center">
                <h3>Silahkan sampaikan pesan di bawah ini</h3>
              </div>

              <div class="col-md-6">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" id="subjek" class="form-control" name="subjek" placeholder="Subjek" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" id="pesan" name="pesan" rows="6" placeholder="Pesan" required></textarea>
              </div>

            </div>

            <div class="row mx-5 mt-4 text-center">
              <div class="loading">Memuat</div>
              <div class="error-message"></div>
              <div class="sent-message">Terima kasih telah menyampaikan pesan Anda.</div>

              <button type="submit">Kirim Pesan</button>
            </div>
          </form>

        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->

  <!-- Remove the container if you want to extend the Footer to full width. -->
  <div class="container-fluid g-0">

    @endsection