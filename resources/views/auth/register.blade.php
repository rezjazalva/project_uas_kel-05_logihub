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
    <link href="assets/css/home.css" rel="stylesheet">
    <link href="assets/css/service.css" rel="stylesheet">
    <link href="assets/css/contact.css" rel="stylesheet">
    <!-- Scripts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600&display=swap');
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container-register">
        <div class="row justify-content-center">

            <!-- Left Content -->
            <div class="col-3 bg-light" style="border-radius: 10px 0px 0px 10px; padding: 15px 0px 15px 15px">
                <div class="container" style="width:100%; height:100%; background: linear-gradient(180deg, rgba(47, 155, 255, 0.80) 0%, rgba(47, 155, 255, 0.95) 25%, rgba(28, 201, 239, 0.65) 100%), url(assets/img/bg.jpg) center center; background-size: cover; border-radius: 10px; padding: 15px 0px 15px 10px">

                    <!-- Brand -->
                    <div class="row my-4 mx-4 g-0 gap-1 align-items-center">
                        <!-- Logo -->
                        <div class="col-2">
                            <div class="container-image">
                                <img src="assets/img/uim_box.png" alt="logo" width="30" height="30">
                            </div>
                        </div>
                        <!-- Title -->
                        <div class="col">
                            <div class="title">Logi<span>Hub</span></div>
                        </div>
                    </div>

                    <!-- Header -->
                    <div class="row my-5 mx-4 g-0" style="padding: 40px 0px 0px 0px">
                        <div class="col">
                            <h2>Selalu Siap Sedia</h2>
                            <h2>Untuk Kebutuhan Anda</h2>
                            <p class="description">Temukan pengalaman terbaik dalam peminjaman aset logistik yang bersifat fleksibel dan terpercaya !</p>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="row mx-4 g-0">
                        <div class="col text-center">
                            <p class="copyright">&copy; All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-5 bg-light" style="border-radius: 0px 10px 10px 0px; padding:20px 0px">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Header -->
                    <div class="row mt-5 mx-4">
                        <div class="col">
                            <h3>Selamat Datang</h3>
                            <p>Silahkan daftar akun peminjaman terlebih dahulu !</p>
                        </div>
                    </div>

                    <!-- Form Name & Status Posisi -->
                    <div class="row my-2 mb-3 mx-4">
                        <!-- Nama -->
                        <div class="col">
                            <label for="name">Nama Lengkap</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- Status Posisi -->
                        <div class="col">
                            <label for="status_posisi">Status Posisi</label>
                            <select id="status_posisi" class="form-select @error('status_posisi') is-invalid @enderror" aria-label="Default select example" name="status_posisi" value="{{ old('status_posisi') }}" required autocomplete="off" autofocus>
                                <option selected></option>
                                <option value="ds">Dosen</option>
                                <option value="mh">Mahasiswa</option>
                            </select>
                            @error('status_posisi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Form Name & Status Posisi -->
                    <div class="row my-2 mb-3 mx-4">
                        <!-- NIM -->
                        <div class="col">
                            <label for="nim">Nomor Induk</label>
                            <input id="no_induk" type="text" class="form-control @error('no_induk') is-invalid @enderror" name="no_induk" value="{{ old('no_induk') }}" required autocomplete="off" autofocus>
                            @error('no_induk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <!-- Form Fakultas & Prodi -->
                    <div class="row my-2 mb-3 mx-4">
                        <!-- Fakultas -->
                        <div class="col">
                            <label for="fakultas">Fakultas</label>
                            <select id="fakultas" class="form-select @error('fakultas') is-invalid @enderror" aria-label="Default select example" name="fakultas" value="{{ old('fakultas') }}" required autocomplete="off" autofocus>
                                <option selected></option>
                                <option value="fteic">FTEIC</option>
                                <option value="ftib">FTIB</option>
                            </select>
                            @error('fakultas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- Program Studi -->
                        <div class="col">
                            <label for="program_studi">Program Studi</label>
                            <select id="program_studi" class="form-select @error('program_studi') is-invalid @enderror" name="program_studi" value="{{ old('program_studi') }}" required autocomplete="off" autofocus>
                                <option selected></option>
                                <option value="bd">Bisnis Digital</option>
                                <option value="if">Informatika</option>
                                <option value="rpl">Rekayasa Perangkat Lunak</option>
                                <option value="sd">Sains Data</option>
                                <option value="si">Sistem Informasi</option>
                                <option value="te">Teknik Elektro</option>
                                <option value="ti">Teknik Industri</option>
                                <option value="tk">Teknik Komputer</option>
                                <option value="tl">Teknik Logistik</option>
                                <option value="tt">Teknik Telekomunikasi</option>
                                <option value="it">Teknologi Informasi</option>
                            </select>
                            @error('program_studi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Form Email -->
                    <div class="row my-2 mb-3 mx-4">
                        <!-- Email -->
                        <div class="col">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="border-radius: 5px 0px 0px 5px; font-family: Open Sans; color: white; background: linear-gradient(180deg, #00D1FF 0%, #20AFFF 100%); border: none">@</div>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" style="border-radius: 0px 5px 5px 0px" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Form Password -->
                    <div class="row my-2 mb-3 mx-4">
                        <!-- Password -->
                        <div class="col">
                            <label for="password">Kata Sandi</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="row my-2 mx-4">
                        <!-- Password -->
                        <div class="col">
                            <label for="password-confirm">Konfirmasi Kata Sandi</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="row mt-5 mb-3 mx-4">
                        <div class="col d-flex justify-content-center">
                            <button type="submit">Daftar Sekarang</button>
                        </div>
                    </div>

                    <!-- Login -->
                    <div class="row mb-4 mx-4">
                        <div class="col d-flex justify-content-center gap-2">
                            <p style="color:#848484c0">Sudah punya akun ?</p>
                            <a href="{{ route('login') }}">Log In</a>
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>

    <script>
        function updateProgramStudi() {
            var fakultas = document.getElementById("fakultas").value;
            var programStudiSelect = document.getElementById("program_studi");

            // Bersihkan semua opsi program studi
            programStudiSelect.innerHTML = "";

            if (fakultas === "ftib") {
                // Tampilkan opsi program studi untuk fakultas Teknologi Informasi dan Bisnis
                var tifbOptions = [{
                        value: "bd",
                        label: "Bisnis Digital"
                    },
                    {
                        value: "if",
                        label: "Informatika"
                    },
                    {
                        value: "rpl",
                        label: "Rekayasa Perangkat Lunak"
                    },
                    {
                        value: "sd",
                        label: "Sains Data"
                    },
                    {
                        value: "si",
                        label: "Sistem Informasi"
                    },
                    {
                        value: "it",
                        label: "Teknologi Informasi"
                    },
                ];

                tifbOptions.forEach(function(option) {
                    var optionElement = document.createElement("option");
                    optionElement.value = option.value;
                    optionElement.text = option.label;
                    programStudiSelect.appendChild(optionElement);
                });
            } else if (fakultas === "fteic") {
                // Tampilkan opsi program studi untuk fakultas Hukum
                var fhOptions = [{
                        value: "te",
                        label: "Teknik Elektro"
                    },
                    {
                        value: "ti",
                        label: "Teknik Industri"
                    },
                    {
                        value: "tk",
                        label: "Teknik Komputer"
                    },
                    {
                        value: "tl",
                        label: "Teknik Logistik"
                    },
                    {
                        value: "tt",
                        label: "Teknik Telekomunikasi"
                    },
                ];

                fhOptions.forEach(function(option) {
                    var optionElement = document.createElement("option");
                    optionElement.value = option.value;
                    optionElement.text = option.label;
                    programStudiSelect.appendChild(optionElement);
                });
            }
        }

        // Panggil fungsi updateProgramStudi saat halaman dimuat dan saat fakultas berubah
        document.addEventListener("DOMContentLoaded", updateProgramStudi);
        document.getElementById("fakultas").addEventListener("change", updateProgramStudi);
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

    <script src="https://kit.fontawesome.com/169f5f0fd3.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>

</html>