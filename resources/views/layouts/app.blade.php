<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LogiHub</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">


    <!-- Scripts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600&display=swap');
    </style>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

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

</body>

</html>