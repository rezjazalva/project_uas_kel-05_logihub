@extends ('layouts.app')
@section('content')
<style type="text/css">
    @import url("../assets/css/home.css");
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
                <li><a class="nav-link scrollto active" href="{{url('/')}}">Beranda</a></li>
                <li><a class="nav-link scrollto" href="{{route('user.layanan')}}">Layanan</a></li>
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

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center gap-5">

            <!-- Left Content -->
            <div class="col-xl-5 d-flex flex-column justify-content-center g-0">
                <h4 style="color:white; font-weight:700">SOLUSI TERPERCAYA</h4>
                <h1>UNTUK KEBUTUHAN</h1>
                <h1 style="padding-bottom:35px"><span>LOGISTIK</span> ANDA</h1>
                <p>Kami selalu berkomitmen untuk memberikan sebuah layanan yang berkualitas dan terpercaya dalam peminjaman aset untuk menunjang kebutuhan logistik Anda secara fleksibel.</p>
                <div class="button d-flex align-items-center gap-4">
                    <div><a href="{{url('/form-pinjam')}}" class="btn-get-started scrollto">Pinjam Sekarang</a></div>
                    <div class="more d-flex align-items-center gap-3">
                        <div class="more-icon d-flex text-align-center justify-content-center align-items-center">
                            <iconify-icon icon="uiw:down-circle-o" width="40"></iconify-icon>
                        </div>
                        <a href="#about" class="btn-more">Selengkapnya</a>
                    </div>

                </div>
            </div>

            <!-- Right Content -->
            <div class="col-xl-4 hero-img g-0" data-aos="zoom-in" data-aos-delay="150">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Vendor ======= -->
    <section id="vendor" class="vendor">
        <div class="container">

            <div class="row gap-4 mx-3">

                <!-- Certificate 1 -->
                <div class="cont col">
                    <!-- row -->
                    <div class="row d-flex align-items-center mx-2">
                        <!-- Logo -->
                        <div class="boxes col-2">
                            <div class="box d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill fa-xl" style="color:white"></i>
                            </div>
                        </div>
                        <!-- Text -->
                        <div class="iso col-10">
                            <h3>ISO</h3>
                            <h2>27001 : 2013</h2>
                        </div>
                    </div>
                </div>

                <!-- Certificate 2 -->
                <div class="cont col">
                    <!-- row -->
                    <div class="row d-flex align-items-center mx-2">
                        <!-- Logo -->
                        <div class="boxes col-2">
                            <div class="box d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill fa-xl" style="color:white"></i>
                            </div>
                        </div>
                        <!-- Text -->
                        <div class="iso col-10">
                            <h3>IEC</h3>
                            <h2>62368-1 : 2018</h2>
                        </div>
                    </div>
                </div>

                <!-- Certificate 3 -->
                <div class="cont col">
                    <!-- row -->
                    <div class="row d-flex align-items-center mx-2">
                        <!-- Logo -->
                        <div class="boxes col-2">
                            <div class="box d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill fa-xl" style="color:white"></i>
                            </div>
                        </div>
                        <!-- Text -->
                        <div class="iso col-10">
                            <h3>ISO</h3>
                            <h2>31000 : 2018</h2>
                        </div>
                    </div>
                </div>

                <!-- Certificate 4 -->
                <div class="cont col">
                    <!-- row -->
                    <div class="row d-flex align-items-center mx-2">
                        <!-- Logo -->
                        <div class="boxes col-2">
                            <div class="box d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill fa-xl" style="color:white"></i>
                            </div>
                        </div>
                        <!-- Text -->
                        <div class="iso col-10">
                            <h3>IEC</h3>
                            <h2>62443-1 : 2020</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Container -->
    </section><!-- End -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <!-- About -->
            <div class="row gx-0">

                <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>TENTANG KAMI</h3>
                        <h2>Platform Penyedia Layanan</h2>
                        <h2 style="padding-bottom:15px;">Peminjaman Aset Logistik</h2>
                        <p> Kami adalah Unit Bagian Logistik Institut Teknologi Telkom Surabaya yang berwewenang dalam pengelolaan administrasi logistik yang meliputi layanan peminjaman dan pemeliharaan aset internal perguruan tinggi. Terlebih kami berkomitmen untuk memberikan pengalaman yang optimal dengan layanan yang bersifat fleksibel. </p>
                    </div>
                </div>

                <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/about.png" class="img-fluid" alt="">
                </div>
            </div>

        </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
            @php
            $totalUsers = \App\Models\User::count();
            $totalAssets = \App\Models\Asset::count();
            $totalProses = \App\Models\Peminjaman::count();
            $totalAdmin = \App\Models\Admin::count();
            @endphp
            <div class="row counters">

                <div class="col-xl-3 col-6 text-center d-flex align-items-center justify-content-center">
                    <div class="container-count">
                        <div class="ornament"></div>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalUsers}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Pengguna</p>
                    </div>
                </div>
                <div class="col-xl-3 col-6 text-center d-flex align-items-center justify-content-center">
                    <div class="container-count">
                        <div class="ornament"></div>
                        <span data-purecounter-start="0" data-purecounter-end="{{$totalAssets}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Daftar Aset</p>
                    </div>
                </div>
                <div class="col-xl-3 col-6 text-center d-flex align-items-center justify-content-center">
                    <div class="container-count">
                        <div class="ornament"></div>
                        <span data-purecounter-start="0" data-purecounter-end="{{$totalProses}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Surat Masuk</p>
                    </div>
                </div>
                <div class="col-xl-3 col-6 text-center d-flex align-items-center justify-content-center">
                    <div class="container-count">
                        <div class="ornament"></div>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalAdmin }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Karyawan</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section -->



    <!-- ======= Our Value ======= -->
    <section id="value" class="value">
        <div class="container">

            <!-- Header -->
            <div class="row justify-content-center text-center mx-3">
                <h3>KEUNGGULAN KAMI</h3>
                <h2 style="font-weight:400">Optimalisasi Pengelolaan Logistik</h2>
                <h2>Dengan Pelayanan Ekslusif</h2>
                <div class="line"></div>
            </div>

            <!-- Card -->
            <div class="row mx-3 justify-content-center text-center" style="border-radius:15px; background: #20adff18; padding: 0px 10px; margin-bottom: 80px">

                <!-- Value 1 -->
                <div class="col-3" style="padding:20px 10px 20px 10px">
                    <div class="container-card">
                        <!-- Logo -->
                        <div class="card-logo">
                            <div class="logo-container">
                                <iconify-icon icon="fa6-solid:clock" style="color: white;" width="35" class="fa-2xl"> </iconify-icon>
                            </div>
                        </div>
                        <!-- Title -->
                        <div class="head-title"></div>
                        <h3 class="card-header">Efisiensi Operasional</h3>
                        <!-- Line -->
                        <hr style="margin:0">
                        <div class="liner"></div>
                        <!-- Paragraph -->
                        <p>Dengan proses yang terstruktur dan sistem yang terotomatisasi, pengelolaan data peminjaman aset akan menjadi efisien.</p>
                        <!-- Footer -->
                        <div class="footer"></div>
                    </div>
                </div>

                <!-- Value 2 -->
                <div class="col-3" style="padding:20px 10px 20px 10px">
                    <div class="container-card">
                        <!-- Logo -->
                        <div class="card-logo">
                            <div class="logo-container">
                                <iconify-icon icon="tabler:discount-check-filled" style="color: white; font-size:42px" class="fa-2xl"></iconify-icon>
                            </div>
                        </div>
                        <!-- Title -->
                        <div class="head-title"></div>
                        <h3 class="card-header">Kualitas Terkontrol</h3>
                        <!-- Line -->
                        <hr style="margin:0">
                        <div class="liner"></div>
                        <!-- Paragraph -->
                        <p>Pemeliharaan rutin dan teratur dilakukan dengan tujuan untuk memastikan bahwa aset tetap dalam kualitas yang baik.</p>
                        <!-- Footer -->
                        <div class="footer"></div>
                    </div>
                </div>

                <!-- Value 3 -->
                <div class="col-3" style="padding:20px 10px 20px 10px">
                    <div class="container-card">
                        <!-- Logo -->
                        <div class="card-logo">
                            <div class="logo-container">
                                <iconify-icon icon="tabler:bulb-filled" style="color: white;" width="45" class="fa-2xl"></iconify-icon>
                            </div>
                        </div>
                        <!-- Title -->
                        <div class="head-title"></div>
                        <h3 class="card-header">Inovasi Teknologi</h3>
                        <!-- Line -->
                        <hr style="margin:0">
                        <div class="liner"></div>
                        <!-- Paragraph -->
                        <p>Beradaptasi terhadap teknologi terbaru adalah suatu rencana strategis untuk memaksimalkan pengalaman pengguna.</p>
                        <!-- Footer -->
                        <div class="footer"></div>
                    </div>
                </div>

                <!-- Value 4 -->
                <div class="col-3" style="padding:20px 10px 20px 10px">
                    <div class="container-card">
                        <!-- Logo -->
                        <div class="card-logo">
                            <div class="logo-container">
                                <iconify-icon icon="ph:share-network-fill" style="color: white;" width="39" class="fa-2xl"></iconify-icon>
                            </div>
                        </div>
                        <!-- Title -->
                        <div class="head-title"></div>
                        <h3 class="card-header">Kemitraan Strategis</h3>
                        <!-- Line -->
                        <hr style="margin:0">
                        <div class="liner"></div>
                        <!-- Paragraph -->
                        <p>Menjalin kolaboratif yang solid dengan pemasok, hal ini akan dapat memperluas jangkauan untuk keberlanjutan layanan.</p>
                        <div class="footer"></div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us -->
            <div class="wrapper-why-us row mx-3 justify-content-center">
                <div class="container-why-us">

                    <!-- Row -->
                    <div class="row gap-5 align-items-center">

                        <!-- Image -->
                        <div class="col">
                            <!-- Accordion -->
                            <div class="container-accordion">
                                <div class="accordion" id="accordionExample">

                                    <!-- First Item -->
                                    <!-- Wrapper -->
                                    <div class="accordion-item" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <!-- Header -->
                                        <h2 class="accordion-header" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span>01</span> Layanan Berkualitas Unggul
                                            </button>
                                        </h2>
                                        <!-- Body -->
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Kami selalu berkomitmen untuk memberikan layanan yang terbaik dengan menjamin pemeliharaan aset yang berkualitas tinggi.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Second Item -->
                                    <!-- Wrapper -->
                                    <div class="accordion-item" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <!-- Header -->
                                        <h2 class="accordion-header" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                <span>02</span> Tanpa Beban Biaya
                                            </button>
                                        </h2>
                                        <!-- Body -->
                                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Kami mengutamakan keterbukaan akses secara penuh kepada pengguna tanpa memberikan hambatan terkait beban finansial.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Third Item -->
                                    <!-- Wrapper -->
                                    <div class="accordion-item mb-0" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        <!-- Header -->
                                        <h2 class="accordion-header" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                <span>03</span> Keamanan Data Terjamin
                                            </button>
                                        </h2>
                                        <!-- Body -->
                                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Kami mengimplementasikan protokol keamanan yang ketat untuk memastikan bahwa perlindungan informasi pribadi pengguna telah terjamin. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="col g-0">
                            <!-- Title -->
                            <h3>Mengapa Harus Kami</h3>
                            <!-- Header -->
                            <h2 style="font-weight:400;">Kepuasan Anda Menjadi</h2>
                            <h2 style="margin-bottom:25px;">Prioritas Utama Bagi Kami</h2>
                            <!-- Description -->
                            <p>Kami memiliki dedikasi yang tinggi untuk memberikan layanan terbaik bagi pengguna. Kami juga berkomitmen untuk menjaga standar kualitas yang tinggi dengan memberikan pengalaman yang handal dalam setiap langkah.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div><!--End Container  -->
    </section><!-- End Value Section -->

    <!-- ======= Culture ======= -->
    <section id="culture" class="culture">
        <div class="container">

            <!-- Header -->
            <div class="row g-0 gap-5 mx-3 d-flex align-items-center" style="padding-bottom:40px">
                <!-- Left Content -->
                <div class="col">
                    <h3>Budaya Kami</h3>
                    <h2 style="font-weight: 400">Konsisten Menjaga Kehandalan</h2>
                    <h2 style="margin-bottom: 25px">Pada Setiap Langkah Kerja</h2>
                    <p>
                        Dalam upaya untuk menjaga reputasi kami sebagai mitra yang dapat diandalkan, kami menyadari bahwa dengan menerapkan keteguhan dalam membangun standar etika kerja yang berkualitas merupakan kunci untuk memberikan layanan yang unggul.
                    </p>
                </div>
                <!-- Right Content -->
                <div class="col" style="padding-left:40px">
                    <div class="content-image d-flex justify-content-center">
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row mx-3 g-0 mt-5 gap-3">
                <!-- Image -->
                <div class="col">
                    <div class="images"></div>
                </div>

                <!-- ELITE -->
                <div class="col">
                    <!-- Header -->
                    <h2 style="font-size:20px; line-height:30px;">Kami Mendorong Motivasi Karyawan</h2>
                    <h2 style="font-size:20px; line-height:30px; padding-bottom:25px;">
                        Dengan Cara Menanamkan Nilai
                        <span style="padding-left:5px; font-weight:700; color: #20AFFF; font-size:35px">ELITE</span>
                    </h2>

                    <!-- Content -->

                    <!-- Excellence -->
                    <div class="row">
                        <!-- Text -->
                        <div class="col-8">
                            <p style="padding:0; margin:0; font-size: 13px">
                                Memiliki motivasi untuk selalu unggul dengan tujuan mengejar pertumbuhan dan target yang lebih tinggi.
                            </p>
                        </div>
                        <!-- Num -->
                        <div class="col-1">
                            <i class="bi bi-1-circle-fill fa-xl"></i>
                        </div>
                        <!-- Title -->
                        <div class="col-3">
                            <h2 style="font-weight:500; font-size:20px; padding-top:0; margin-top:0px; line-height:25px;">
                                <span>E</span>xcellence
                            </h2>
                        </div>
                        <div class="col bg-danger g-0" style="margin: 20px 12px; border-bottom: 1px solid rgb(180, 180, 180)"></div>
                    </div>

                    <!-- Leadership -->
                    <div class="row">
                        <!-- Text -->
                        <div class="col-8">
                            <p style="padding:0; margin:0; font-size: 13px">
                                Bertanggung jawab secara penuh serta memahami bahwa kepemimpinan bukan sekadar otoritas.
                            </p>
                        </div>
                        <!-- Num -->
                        <div class="col-1">
                            <i class="bi bi-2-circle-fill fa-xl"></i>
                        </div>
                        <!-- Title -->
                        <div class="col-3">
                            <h2 style="font-weight:500; font-size:20px; padding-top:0; margin-top:0px; line-height:25px;">
                                <span>L</span>eadership
                            </h2>
                        </div>
                        <div class="col bg-danger g-0" style="margin: 20px 12px; border-bottom: 1px solid rgb(180, 180, 180)"></div>
                    </div>

                    <!-- Integrity -->
                    <div class="row">
                        <!-- Text -->
                        <div class="col-8">
                            <p style="padding:0; margin:0; font-size: 13px">
                                Mengutamakan etika kerja dengan bertindak secara jujur, transparan, dan menghormati nilai moral.
                            </p>
                        </div>
                        <!-- Num -->
                        <div class="col-1">
                            <i class="bi bi-3-circle-fill fa-xl"></i>
                        </div>
                        <!-- Title -->
                        <div class="col-3">
                            <h2 style="font-weight:500; font-size:20px; padding-top:0; margin-top:0px; line-height:25px;">
                                <span>I</span>ntegrity
                            </h2>
                        </div>
                        <div class="col bg-danger g-0" style="margin: 20px 12px; border-bottom: 1px solid rgb(180, 180, 180)"></div>
                    </div>

                    <!-- Teamwork -->
                    <div class="row">
                        <!-- Text -->
                        <div class="col-8">
                            <p style="padding:0; margin:0; font-size: 13px">
                                Mendorong semangat positif dalam setiap tindakan, ide, dan inisiatif untuk menginspirasi anggota.
                            </p>
                        </div>
                        <!-- Num -->
                        <div class="col-1">
                            <i class="bi bi-4-circle-fill fa-xl"></i>
                        </div>
                        <!-- Title -->
                        <div class="col-3">
                            <h2 style="font-weight:500; font-size:20px; padding-top:0; margin-top:0px; line-height:25px;">
                                <span>T</span>eamwork
                            </h2>
                        </div>
                        <div class="col bg-danger g-0" style="margin: 20px 12px; border-bottom: 1px solid rgb(180, 180, 180)"></div>
                    </div>

                    <!-- Enthusiasm -->
                    <div class="row">
                        <!-- Text -->
                        <div class="col-8">
                            <p style="padding:0; margin:0; font-size: 13px">
                                Bertanggung jawab secara penuh serta memahami bahwa kepemimpinan bukan sekadar otoritas.
                            </p>
                        </div>
                        <!-- Num -->
                        <div class="col-1 d-flex justify-content-center">
                            <i class="bi bi-5-circle-fill fa-xl"></i>
                        </div>
                        <!-- Title -->
                        <div class="col-3 ">
                            <h2 style="font-weight:500; font-size:20px; padding-top:0; margin-top:0px; line-height:25px;">
                                <span>E</span>nthusiasm
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- End -->
    </section><!-- End Culture Section -->

    <!-- ======= Procedure ======= -->
    <section id="procedure" class="procedure">
        <div class="container">

            <!-- Header -->
            <div class="row text-center justify-content-center">
                <h3>Prosedur Operasional</h3>
                <h2 style="font-weight:400">Temukan Kemudahan Layanan</h2>
                <h2>Dengan Satu Sentuhan</h2>
                <div class="line"></div>
            </div>

            <!-- Content -->
            <div class="content row mx-4 gap-3">
                <div class="container-step">

                    <div class="row justify-content-center">
                        <div class="content-text d-flex justify-content-center">
                            <h3>Prosedur Peminjaman Aset</h3>
                        </div>
                    </div>

                    <div class="row g-0 gap-5" style="padding:0px 40px">
                        <!-- Step 1 -->
                        <div class="col">
                            <div class="step row">
                                <!-- Image -->
                                <div class="col-3">
                                    <div class="pic">
                                        <img src="assets/img/form.png" alt="register">
                                    </div>
                                </div>
                                <!-- Num -->
                                <div class="col-1">
                                    <i class="bi bi-1-square-fill fa-xl"></i>
                                </div>
                                <!-- Description -->
                                <div class="col-8">
                                    <h3>Mendaftar Akun</h3>
                                    <p>Pengguna harus melakukan registrasi akun terlebih dahulu pada halaman menu <span style="color:#20AFFF">Daftar</span> untuk mendapatkan akses secara penuh.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="col">
                            <div class="step row">
                                <!-- Image -->
                                <div class="col-3">
                                    <div class="pic">
                                        <img src="assets/img/write.png" alt="form">
                                    </div>
                                </div>
                                <!-- Num -->
                                <div class="col-1">
                                    <i class="bi bi-2-square-fill fa-xl"></i>
                                </div>
                                <!-- Description -->
                                <div class="col-8">
                                    <h3>Melengkapi Formulir</h3>
                                    <p>
                                        Pengguna harus melengkapi setiap butir kolom pada formulir pengajuan permohonan peminjaman aset pada menu <span style="color:#20AFFF">Layanan</span>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0 gap-5" style="margin-top: 40px; padding:0px 40px">
                        <!-- Step 1 -->
                        <div class="col">
                            <div class="step row">
                                <!-- Image -->
                                <div class="col-3">
                                    <div class="pic">
                                        <img src="assets/img/hourglass.png" alt="time">
                                    </div>
                                </div>
                                <!-- Num -->
                                <div class="col-1">
                                    <i class="bi bi-3-square-fill fa-xl"></i>
                                </div>
                                <!-- Description -->
                                <div class="col-8">
                                    <h3>Menunggu Persetujuan</h3>
                                    <p>
                                        Pengguna harus menunggu beberapa waktu setelah melakukan submit formulir hingga status berubah menjadi
                                        <span style="color:#20AFFF">Disetujui</span>.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="col">
                            <div class="step row">
                                <!-- Image -->
                                <div class="col-3">
                                    <div class="pic">
                                        <img src="assets/img/printer.png" alt="printer">
                                    </div>
                                </div>
                                <!-- Num -->
                                <div class="col-1">
                                    <i class="bi bi-4-square-fill fa-xl"></i>
                                </div>
                                <!-- Description -->
                                <div class="col-8">
                                    <h3>Mencetak Surat Persetujuan</h3>
                                    <p>
                                        Pengguna harus mencetak bukti persetujuan pada button
                                        <span style="color:#20AFFF">Cetak</span> setelah status berubah menjadi <span style="color:#20AFFF">Disetujui</span>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0 gap-5" style="margin-top: 40px; padding:0px 40px">
                        <!-- Step 1 -->
                        <div class="col">
                            <div class="step row">
                                <!-- Image -->
                                <div class="col-3">
                                    <div class="pic">
                                        <img src="assets/img/paper-plane.png" alt="submit">
                                    </div>
                                </div>
                                <!-- Num -->
                                <div class="col-1">
                                    <i class="bi bi-5-square-fill fa-xl"></i>
                                </div>
                                <!-- Description -->
                                <div class="col-8">
                                    <h3>Menyerahkan Surat Langsung</h3>
                                    <p>
                                        Pengguna harus menuju ruang kerja Logistik untuk menyerahkan bukti persetujuan dan jaminan peminjaman aset.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="col">
                            <div class="step row">
                                <!-- Image -->
                                <div class="col-3">
                                    <div class="pic">
                                        <img src="assets/img/best-product.png" alt="box">
                                    </div>
                                </div>
                                <!-- Num -->
                                <div class="col-1">
                                    <i class="bi bi-6-square-fill fa-xl"></i>
                                </div>
                                <!-- Description -->
                                <div class="col-8">
                                    <h3>Aset Telah Dipinjam</h3>
                                    <p>
                                        Setelah aset berada di tangan pengguna, pengguna harus mengembalikan aset sesuai dengan tanggal pengembalian awal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Procedure -->
    </section><!-- End Procedure Section -->

    <section id="cta" class="cta">
        <div class="container-tag">
            <div class="row justify-content-center mx-5 g-0">
                <!-- Persuasif -->
                <div class="col-7">
                    <h3>Penawaran Kami</h3>
                    <h2 style="font-weight:400">Temukan Pengalaman Luar Biasa</h2>
                    <h2 style="padding-bottom:40px">Bersama Penawaran Kami</h2>
                    <a href="{{url('/form-pinjam')}}" class="pinjam btn-get-started scrollto">Pinjam Sekarang</a>
                    <a href="{{url('/layanan')}}" class="layanan btn-get-started scrollto">Lihat Layanan</a>
                    <!-- </div> -->

                </div>
                <!-- Image -->
                <div class="col-5">
                    <img src="assets/img/obj-cta.png" alt="object" height="300px" width="auto">
                </div>
            </div>
        </div><!--End Container-->
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