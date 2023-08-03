<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LogiHub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/status-pinjam.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600&display=swap');
  </style>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
  </style>
</head>

<body>

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
          <li><a class="nav-link scrollto" href="{{url('/form-pinjam')}}">Formulir Peminjaman</a></li>
          <li><a class="nav-link scrollto active" href="{{url('/status-pinjam')}}">Status Peminjaman</a></li>
        </ul>
      </div>

    </div>
  </section>

  <main id="main">

    <!-- Form -->
    <section id="form" class="form">
      <div class="container">

        <div class="row">
          <h3 class="text-center">Status</h3>
          <h2 class="text-center">Peminjaman Aset Logistik</h2>

          <table class="table" id="data-table">
            <tbody style="border-color:transparent">
            @foreach ($peminjamans as $index => $peminjaman)
            @if ($index >= 1)
            @break
            @endif
            <tr>
              <td><strong>Nama Peminjam : </strong> {{ $peminjaman->user->name }}</td>
              <td><strong>Program Studi : </strong> {{ $peminjaman->user->program_studi }}</td>
            </tr>
            <tr>
              <td><strong>No. Induk : </strong> {{ $peminjaman->user->no_induk }}</td>
              <td><strong>Fakultas : </strong> {{ $peminjaman->user->fakultas }}</td>
            </tr>
            @endforeach
          </tbody>
          </table>

          <div class=" table-responsive">

              <table class="table-bordered" id="data-table">
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Jenis Item</th>
                    <th>Nama Item</th>
                    <th>Jumlah</th>
                    <th>Tujuan</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($peminjamans as $index => $peminjaman)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $peminjaman->kode_item }}</td>
                    <td>{{ $peminjaman->nama_item }}</td>
                    <td>{{ $peminjaman->jumlah }}</td>
                    <td>{{ $peminjaman->tujuan }}</td>
                    <td>{{ $peminjaman->tanggal_pinjam }}</td>
                    <td>{{ $peminjaman->tanggal_kembali }}</td>
                    <td>{{ $peminjaman->status }}</td>
                    <td class="d-flex justify-content-between text-center gap-2">
                      @if ($peminjaman->status === 'disetujui' && !empty($peminjaman->invoice))
                      <a class="cetak text-center" type="submit" href="{{ url('download-invoice/'.$peminjaman->id) }}">Cetak</a>

                      @else
                      <button type="button" class="disabled btn btn-lg btn-light" disabled>Cetak</button>
                      @endif

                      <!-- Tambahkan tombol Batal -->
                      @if ($peminjaman->status === 'diproses' || $peminjaman->status === 'disetujui')
                      <form action="{{ route('batal.peminjaman', $peminjaman->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin membatalkan dan menghapus peminjaman ini?')">Batal</button>
                      </form>
                      @elseif ($peminjaman->status === 'sedang dipinjam' || $peminjaman->status === 'dikembalikan')
                      <button type="button" class="disabled btn btn-lg btn-light" disabled>Batal</button>
                      @else
                      -

                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>


      </div>

      </div><!-- End Container -->
    </section><!--  End Section -->

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white">
      <!-- Section: Social media -->
      <section class="footer d-flex justify-content-between p-3" style="background: linear-gradient(180deg, #20AFFF 0%, #0f9ff3 100%);">
        <!-- Left -->
        <div class="mx-5">
          <span style="font-size:14px">Bergabung bersama dengan kami di jejaring sosial </span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div class="mx-5">
          <a href="" class="text-white me-4"> <i class="fab fa-facebook-f"></i></a>
          <a href="" class="text-white me-4"><i class="fab fa-twitter"></i></a>
          <a href="" class="text-white me-4"><i class="fab fa-google"></i></a>
          <a href="" class="text-white me-4"><i class="fab fa-instagram"></i></a>
          <a href="" class="text-white me-4"><i class="fab fa-linkedin"></i></a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="links">
        <div class="container text-center text-md-start mt-2">
          <!-- Grid row -->
          <div class="row">

            <!-- Column 1 -->
            <div class="col-3 mx-auto">
              <!-- Content -->
              <div class="container-brand d-flex align-items-center gap-3 mb-3">
                <!-- Logo -->
                <div class="logo-box d-flex align-items-center justify-content-center">
                  <img src="assets/img/uim_box.png" alt="box">
                </div>
                <!-- Brand -->
                <h1 class="logo"><a href="index.html">Logi<span>Hub</span></a></h1>
              </div>
              <p class="par">
                LogiHub adalah platform berbasis web untuk peminjaman aset logistik yang bersifat fleksibel.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Column 2 -->
            <div class="col-3 mx-auto" style="padding-left: 140px">
              <!-- Links -->
              <h6>Layanan</h6>
              <hr class="mb-3 mt-0 d-inline-block mx-auto" style="width: 60px; height: 2px" />
              <p>
                <a href="#!" class="text-white">Peminjaman Aset</a>
              </p>
              <p>
                <a href="#!" class="text-white">Pemeliharaan Aset</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Column 3 -->
            <div class="col-3 mx-auto" style="padding-left: 95px">
              <!-- Links -->
              <h6>Tautan</h6>
              <hr class="mb-3 mt-0 d-inline-block mx-auto" style="width: 60px; height: 2px" />
              <p>
                <a href="{{url('/')}}" class="text-white">Beranda</a>
              </p>
              <p>
                <a href="{{url('/layanan')}}" class="text-white">Layanan</a>
              </p>
              <p>
                <a href="{{url('/kontak')}}" class="text-white">Kontak</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Column 4 -->
            <div class="col-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6>Kontak</h6>
              <hr class="mb-3 mt-0 d-inline-block mx-auto" style="width: 60px; height: 2px" />
              <p><i class="fas fa-home mr-3"></i> Jl. Ketintang No. 156, Surabaya</p>
              <p><i class="fas fa-envelope mr-3"></i>
                info<span class="add">@</span>logihub.com
              </p>
              <p><i class="fas fa-phone mr-3"></i> +62 899 3415 875</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="copyright text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        <p class="copyright">&copy; All Rights Reserved</p>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->















    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="https://kit.fontawesome.com/169f5f0fd3.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
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

</body>

</html>