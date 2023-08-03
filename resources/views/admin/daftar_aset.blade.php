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
    <link href="assets/css/list-asset.css" rel="stylesheet">
    <style>
        /* Gaya untuk kontainer pagination */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        /* Gaya untuk elemen pagination */
        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .page-item {
            margin: 0 5px;
        }

        /* Gaya untuk tautan pagination */
        .page-link {
            padding: 8px 12px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .page-link:hover {
            background-color: #007bff;
            color: #fff;
        }

        /* Gaya untuk tautan pagination yang aktif */
        .page-item.active .page-link {
            background-color: #007bff;
            color: #fff;
        }

        /* Gaya untuk tautan pagination sebelumnya dan selanjutnya */
        .page-item.prev .page-link,
        .page-item.next .page-link {
            padding: 8px 10px;
        }

        /* Gaya untuk tautan pagination yang dinonaktifkan */
        .page-item.disabled .page-link {
            color: #ccc;
            pointer-events: none;
            border-color: #ccc;
        }
    </style>
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
                                <a href="{{url('/dashboard')}}" class="nav-link scrollto ">
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
                                <a href="{{route('admin.daftar-aset')}}" class="nav-link scrollto active">
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
                                        <h3>Daftar Aset</h3>
                                        <!-- Form -->
                                        <form action="{{ route('admin.daftar-aset') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" name="search" class="form-control border-0 small" id="searchInput" placeholder="Pencarian" aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn" type="submit">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div><!-- End Dash Head -->
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
                                                    <div class="col-12 d-flex justify-content-between align-items-center">
                                                        <h3>Tabel Daftar Aset</h3>
                                                        <div class="button-crud d-flex gap-2">
                                                            <a href="{{route('admin.asset.create')}}" class="create"><i class="bi bi-plus-square"></i>Tambah</a>


                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="tes" style="padding: 20px 20px; border-radius: 0px 0px 10px 10px; background: white">

                                                            <!-- Tabel -->
                                                            <table class="table table-bordered" id="data-table">
                                                                <thead>
                                                                    <tr class="text-center">

                                                                        <th scope="col" style="width:8%">Kode Aset</th>
                                                                        <th scope="col" style="width:20%">Nama Aset</th>
                                                                        <th scope="col" style="width:20%">Kategori</th>
                                                                        <th scope="col" style="width:15%">Jumlah Stok</th>
                                                                        <th scope="col" style="width:17%">Action</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>

                                                                    @php
                                                                    $index = 0;
                                                                    @endphp
                                                                    @foreach ($assets as $aset)
                                                                    @if ($aset->kode_item === 'aset')
                                                                    <tr>
                                                                        <td class="text-center">{{ ++$index }}</td>
                                                                        <td>{{ $aset->nama_item }}</td>
                                                                        <td> {{ $aset->jenis_item }}</td>
                                                                        <td class="text-center">{{ $aset->stok_item }}</td>
                                                                        <td class="d-flex justify-content-between">
                                                                            <a href="{{ route('admin.aset.edit', ['aset' => $aset->id]) }}" class="update"><i class="bi bi-pencil-square"></i>Sunting</a>

                                                                            <a href="{{ route('admin.aset.destroy', ['aset' => $aset]) }}" class="delete" onclick="event.preventDefault(); if (confirm('Apakah Anda yakin ingin menghapus item ini?')) document.getElementById('delete-form-{{ $aset->id }}').submit();">
                                                                                <i class="bi bi-x-square"></i>Hapus
                                                                            </a>
                                                                            <form id="delete-form-{{ $aset->id }}" action="{{ route('admin.aset.destroy', ['aset' => $aset]) }}" method="POST" style="display: none;">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                    @endif
                                                                    @endforeach
                                                                </tbody>
                                                            </table>




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
        <script src="assets/js/pagination.js"></script>

        <script src="https://kit.fontawesome.com/169f5f0fd3.js" crossorigin="anonymous"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>