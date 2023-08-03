<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Simpatik</title>
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
    <link href="assets/css/dashboard.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600&display=swap');
    </style>

</head>

<body>

    <div class="container-fluid">
        <div class="row bg-danger">

            <div class="col-12 d-flex g-0">

                <!-- Side Bar -->
                <div class="sidebar bg-primary">

                    <!-- Title -->
                    <div class="title row d-flex align-items-center g-0 justify-content-center">
                        <!-- Icon -->
                        <div class="col-4">
                            <div class="container-icon d-flex align-items-center justify-content-center">
                                <iconify-icon icon="ri:home-smile-2-fill"></iconify-icon>
                            </div>
                        </div>
                        <!-- Title -->
                        <div class="col-8">
                            <h3>Simpatik</h3>
                        </div>
                    </div>

                    <!-- Menu -->
                    <div class="menu row">

                        <ul>
                            <!-- Dashboard -->
                            <li class="dash">
                                <a href="{{url('/dashboard')}}" class="nav-link scrollto active">
                                    <iconify-icon icon="ic:round-dashboard-customize"></iconify-icon>
                                    Dashboard
                                </a>
                            </li>

                            <li class="head">Menu</li>

                            <!-- Permohonan Peminjaman -->
                            <li>
                                <a href="{{route('admin.permohonan')}}" class="nav-link scrollto">
                                    <i class="bi bi-file-earmark-text-fill"></i>
                                    Permohonan Pinjam
                                </a>
                            </li>

                            <!-- Daftar Aset -->
                            <li>
                                <a href="{{route('admin.daftar-aset')}}" class="nav-link scrollto">
                                    <i class="bi bi-box-fill"></i>
                                    Daftar Aset
                                </a>
                            </li>

                            <!-- Daftar Ruang -->
                            <li>
                                <a href="{{route('admin.daftar-ruang')}}" class="nav-link scrollto">
                                    <i class="bi bi-house-fill"></i>
                                    Daftar Ruang
                                </a>
                            </li>

                            <!-- Profil Pengguna -->
                            <li>
                                <a href="{{route('admin.profil-pengguna')}}" class="nav-link scrollto">
                                    <i class="bi bi-person-fill"></i>
                                    Profil Pengguna
                                </a>
                            </li>

                            <li class="head">Lain</li>

                            <!-- Profil -->
                            <li>
                                <a href="{{route('admin.profil-admin')}}" class="nav-link scrollto">
                                    <i class="bi bi-person-fill-lock"></i>
                                    Profil Admin
                                </a>
                            </li>

                            <!-- Pesan -->
                            <li class="last">
                                <a href="{{route('admin.pesan')}}" class="nav-link scrollto">
                                    <i class="bi bi-chat-left-dots-fill"></i>
                                    Pesan
                                </a>
                            </li>

                            <!-- Copyright -->
                            <li class="copy">
                                <p class="copyright text-center">&copy; All Rights Reserved</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Content -->
                <div class="content" style="background:white">

                    <!-- Top Bar -->
                    <div class="row gx-0">
                        <div class="col-12">

                            <div class="topbar">
                                <!-- Container Topbar -->
                                <div class="row mx-1 d-flex align-items-center">

                                    <!-- Title -->
                                    <div class="col-9 header">
                                        <h3>Sistem Informasi Manajemen Peminjaman Aset Logistik</h3>
                                    </div>

                                    <!-- Admin Profile -->
                                    <div class="col-3 g-0 gap-2 admin-profile d-flex align-items-center" style="padding-left:60px">

                                        <!-- Icon 1 -->
                                        <a class="badge" href="#">
                                            <i class="bi bi-bell-fill"></i>
                                            <div class="badges">
                                                <p>5+</p>
                                            </div>
                                        </a>

                                        <!-- Icon 2 -->
                                        <a class="badge" href="#" style="margin-right:8px">
                                            <i class="bi bi-envelope-fill"></i>
                                            <div class="badges">
                                                <p>5+</p>
                                            </div>
                                        </a>

                                        @auth
                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ Auth::user()->name }}
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="nav-link scrollto btn btn-link" style="padding: 5px 10px">Log Out</button>
                                                    </form>

                                                </li>
                                            </ul>
                                        </div>
                                        @endauth
                                    </div><!-- End Admin Profile -->
                                </div>
                            </div><!-- End Topbar -->

                        </div>
                    </div><!-- End Top Bar -->


                    <!-- Dashboard Head -->
                    <div class="row gx-0">
                        <div class="col-12">

                            <!-- Dash Head -->
                            <div class="dash-head">
                                <div class="dash-row row mx-3 g-0 d-flex align-items-center">
                                    <!-- Text -->
                                    <div class="col-12 d-flex justify-content-between align-items-center">
                                        <!-- Title -->
                                        <h3>Dashboard</h3>
                                        <!-- Button -->
                                        <!-- <button class="d-flex align-items-center gap-2">
                                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                                            <p>Cetak Laporan</p>
                                        </button> -->
                                    </div>
                                </div><!-- End Dash Head -->
                            </div>
                        </div><!-- End Row -->

                        <!-- Count -->
                        <div class="row gx-0">
                            <div class="col-12">

                                <!-- Statistic Count -->
                                <div class="count-stats">
                                    <div class="count-row row mx-3 gap-4 g-0 justify-content-center">

                                        <!-- Permohonan Tertunda -->
                                        <div class="count-cont col">
                                            <div class="container-item">
                                                <!-- Row 1 -->
                                                <div class="row d-flex align-items-center" style="padding: 0px 20px; padding-top:20px">
                                                    <!-- Col 1 -->
                                                    <div class="col-8 cont-text">
                                                        <p>Belum Diproses</p>
                                                        <p class="num">{{ $totalPeminjamanSedangDiproses }}</p>
                                                    </div>
                                                    <!-- Col 2 -->
                                                    <div class="col-4">
                                                        <div class="cont-icon">
                                                            <i class="bi bi-file-earmark-text-fill"></i>
                                                        </div>
                                                    </div><!-- End Col 2 -->
                                                </div><!--End Row 1 -->

                                                <!-- Row 2 -->
                                                <div class="row d-flex align-items-center">
                                                    <!-- Col 1 -->
                                                    <div class="cont-user col d-flex align-items-center">
                                                        <div class="cont-users">
                                                            <!-- Dosen -->
                                                            <div class="dosen d-flex align-items-center gap-1 justify-content-between" style="padding-right:0">
                                                                <a href="{{route('admin.permohonan')}}">Lihat Permohonan</a>
                                                                <i class="bi bi-chevron-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="count-cont col">
                                            <div class="container-item">
                                                <!-- Row 1 -->
                                                <div class="row d-flex align-items-center" style="padding: 0px 20px; padding-top:20px">
                                                    <!-- Col 1 -->
                                                    <div class="col-8 cont-text">
                                                        <p>Daftar Item</p>
                                                        <p class="num">{{ $totalAssets }}</p>
                                                    </div>
                                                    <!-- Col 2 -->
                                                    <div class="col-4">
                                                        <div class="cont-icon">
                                                            <i class="bi bi-box-fill"></i>
                                                        </div>
                                                    </div><!-- End Col 2 -->
                                                </div><!--End Row 1 -->

                                                <!-- Row 2 -->
                                                <div class="row d-flex align-items-center">
                                                    <!-- Col 1 -->
                                                    <div class="cont-user col d-flex align-items-center">
                                                        <div class="cont-users d-flex align-items-center">
                                                            <!-- Dosen -->
                                                            <div class="dosen d-flex align-items-center gap-1">
                                                                <p class="num">{{$Aset}}</p>
                                                                <p>Aset</p>
                                                            </div>
                                                            <!-- Mahasiswa -->
                                                            <div class="dosen d-flex align-items-center gap-1" style="padding-left:15px; border-left: 1px solid white">
                                                                <p class="num">{{$Ruang}}</p>
                                                                <p>Ruang</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Belum Kembali -->
                                        <div class="count-cont col">
                                            <div class="container-item">
                                                <!-- Row 1 -->
                                                <div class="row d-flex align-items-center" style="padding: 0px 20px; padding-top:20px">
                                                    <!-- Col 1 -->
                                                    <div class="col-8 cont-text">
                                                        <p>Belum Kembali</p>
                                                        <p class="num">{{ $sedangDipinjam }}</p>
                                                    </div>
                                                    <!-- Col 2 -->
                                                    <div class="col-4">
                                                        <div class="cont-icon">
                                                            <i class="bi bi-file-earmark-x-fill"></i>
                                                        </div>
                                                    </div><!-- End Col 2 -->
                                                </div><!--End Row 1 -->

                                                <!-- Row 2 -->
                                                <div class="row d-flex align-items-center">
                                                    <!-- Col 1 -->
                                                    <div class="cont-user col d-flex align-items-center">
                                                        <div class="cont-users">
                                                            <!-- Dosen -->
                                                            <div class="dosen d-flex align-items-center gap-1 justify-content-between" style="padding-right:0">
                                                                <a href="{{route('admin.permohonan')}}">Lihat Permohonan</a>
                                                                <i class="bi bi-chevron-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pengguna -->
                                        <div class="count-cont col">
                                            <div class="container-item">
                                                <!-- Row 1 -->
                                                <div class="row d-flex align-items-center" style="padding: 0px 20px; padding-top:20px">
                                                    <!-- Col 1 -->
                                                    <div class="col-8 cont-text">
                                                        <p>Pengguna</p>
                                                        <p class="num">{{ $totalUsers }}</p>
                                                    </div>
                                                    <!-- Col 2 -->
                                                    <div class="col-4">
                                                        <div class="cont-icon">
                                                            <i class="bi bi-person-fill"></i>
                                                        </div>
                                                    </div><!-- End Col 2 -->
                                                </div><!--End Row 1 -->

                                                <!-- Row 2 -->
                                                <div class="row d-flex align-items-center">
                                                    <!-- Col 1 -->
                                                    <div class="cont-user col d-flex align-items-center">
                                                        <div class="cont-users d-flex align-items-center">
                                                            <!-- Dosen -->
                                                            <div class="dosen d-flex align-items-center gap-1">
                                                                <p class="num">{{$Dosen}}</p>
                                                                <p>Dosen</p>
                                                            </div>
                                                            <!-- Mahasiswa -->
                                                            <div class="dosen d-flex align-items-center gap-1" style="padding-left:15px; border-left: 1px solid white">
                                                                <p class="num">{{$Mahasiswa}}</p>
                                                                <p>Mahasiswa</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div><!-- End Row -->

                        <!-- Chart -->
                        <div class="row gx-0">
                            <div class="col-12">

                                <!-- Chart -->
                                <div class="chart">
                                    <div class="chart-row row mx-3 gap-4 g-0 justify-content-center">

                                        <!-- Chart 1 -->
                                        <div class="chart-cont col">
                                            <div class="container-chart">

                                                <div class="row" style="padding: 15px 20px;">
                                                    <div class="col-12">
                                                        <h3>Grafik Peminjaman Aset</h3>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12 bg">
                                                        <div class="tes" style="padding: 20px 20px; border-radius: 0px 0px 10px 10px; background: white">
                                                            <canvas id="peminjamanPerBulanChart" width="400" height="200"></canvas>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Chart 2 -->
                                        <div class="chart-cont col">
                                            <div class="container-chart">

                                                <div class="row" style="padding: 15px 20px;">
                                                    <div class="col-12">
                                                        <h3>5 Aset Yang Sering Dipinjam</h3>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12 bg">
                                                        <div class="tes" style="padding: 20px 20px; border-radius: 0px 0px 10px 10px; background: white">

                                                            <canvas id="asetTerpopulerChart" width="400" height="200"></canvas>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>

                            </div><!-- End Col -->
                        </div><!-- End Row -->

                    </div>




















                </div>


            </div>
        </div>



        <script>
            function loadCharts() {
                // Fungsi untuk memuat data dari server dan membuat grafik Peminjaman Per Bulan
                fetch("{{ route('admin.data.peminjaman.perbulan') }}")
                    .then(response => response.json())
                    .then(data => {
                        var months = data.months;
                        var totals = data.totals;

                        // Buat grafik Peminjaman Per Bulan
                        var ctx1 = document.getElementById('peminjamanPerBulanChart').getContext('2d');
                        var myChart1 = new Chart(ctx1, {
                            type: 'line',
                            data: {
                                labels: months,
                                datasets: [{
                                    label: 'Jumlah Peminjaman',
                                    data: totals,
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    });

                // Fungsi untuk memuat data dari server dan membuat grafik Aset Terpopuler
                fetch("{{ route('admin.data.aset.terpopuler') }}")
                    .then(response => response.json())
                    .then(data => {
                        var labels = data.labels;
                        var totals = data.totals;

                        // Buat grafik Aset Terpopuler
                        var ctx2 = document.getElementById('asetTerpopulerChart').getContext('2d');
                        var myChart2 = new Chart(ctx2, {
                            type: 'bar',
                            data: {
                                labels: labels,
                                datasets: [{
                                    label: 'Jumlah Peminjaman',
                                    data: totals,
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                    borderColor: 'rgba(75, 192, 192, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    });
            }

            // Panggil fungsi loadCharts saat halaman selesai dimuat
            document.addEventListener('DOMContentLoaded', function() {
                loadCharts();
            });
        </script>




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
        <script src="assets/js/chart.js"></script>

        <script src="https://kit.fontawesome.com/169f5f0fd3.js" crossorigin="anonymous"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</body>

</html>