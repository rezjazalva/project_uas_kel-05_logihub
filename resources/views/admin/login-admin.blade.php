<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LogiHub</title>

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->

    <link href="../assets/css/auth.css" rel="stylesheet">

    <!-- Scripts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600&display=swap');
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container-login">
        @if(session('message'))
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-success">
                    {{ session('message') }}
                    <button class="btn btn-link" onclick="window.history.back()"><strong>Kembali</strong></button>
                </div>
            </div>
        </div>
        @endif


        <div class="row justify-content-center py-5">
            <!-- Main Content -->
            <div class="col-5" style="background: linear-gradient(180deg, rgba(47, 155, 255, 0.80) 0%, rgba(47, 155, 255, 0.95) 25%, rgba(28, 201, 239, 0.65) 100%), url(assets/img/bg.jpg) center center; background-size: cover; border-radius: 10px; padding: 25px 50px">
                <!-- Header -->
                <div class="row mb-4">
                    <div class="col d-flex align-items-center g-0 gap-2">
                        <div class="container-image">
                            <img src="../assets/img/uim_box.png" alt="logo" width="30" height="30">
                        </div>
                        <div class="title">Logi<span>Hub</span></div>
                    </div>
                </div>

                <!-- Content -->
                <div class="row">
                    <div class="col bg-light" style="border-radius:10px; padding:10px">
                        <!-- Title -->
                        <div class="row mx-4 mt-4 mb-1">
                            <h3 class="text-center" style="font-size:20px; font-weight:600">Selamat Datang Kembali</h3>
                        </div>
                        <!-- Description -->
                        <div class="row mx-4 mb-3 text-center">
                            <p style="font-size:12px;">Silahkan masuk untuk melanjutkan !</p>
                        </div>

                        <!-- Tab -->
                        <div class="row mx-5 mb-3">
                            <div class="col d-flex justify-content-center">
                                <ul class="nav nav-pills nav-fill">
                                    <li class="nav-item" style="padding-right:5px">
                                        <a class="nav-link" id="user-tab" style="padding:5px 10px" data-toggle="pill" href="{{ route('user.login') }}">Peminjam</a>
                                    </li>
                                    <li class="nav-item" style="padding-left:5px">
                                        <a class="nav-link  active" id="admin-tab" style="padding:5px 10px" data-toggle="pill" href="{{ route('admin.login') }}">Admin</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- NIM -->
                        <form id="admin-login-form" method="POST" action="{{ route('pegawai.login') }}">
                            @csrf
                            <div class="row my-2 mx-5 mb-3 g-0">
                                <label class="labels" for="no_induk">Nomor Induk</label>
                                <input id="no_induk" type="text" class="form-control @error('no_induk') is-invalid @enderror" name="no_induk" value="{{ old('no_induk') }}" required autocomplete="no_induk" autofocus>
                                @error('no_induk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="row my-2 mx-5 mb-3 g-0">
                                <label class="labels" for="password">Kata Sandi</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- Check Box -->
                            <div class="row my-2 mx-5 mb-3 justify-content-center g-0">
                                <!-- Remember Me -->
                                <div class="col">
                                    <div class="form-check gap-2">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" checked {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember" style="padding:0px; font-size:12px">Ingat Saya</label>
                                    </div>
                                </div>
                                <!-- Forgot Password -->
                                <div class="col" style="text-align:right">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Lupa Kata Sandi ?
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="row mt-5 mx-5 mb-3 text-center g-0">
                                <div class="col d-flex justify-content-center">
                                    <button type="submit" class="btn">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                            <!-- Register -->

                            <div class="row mx-5 mb-4">
                                <div class="col d-flex justify-content-center gap-2">
                                    <p style="font-size:12px">Belum punya akun ?</p>
                                    <a href="{{ route('register') }}">Daftar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>