@extends('layouts.app')

@section('content')
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
                    <div class="title">Login<span>Hub</span></div>
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
                                <li class="nav-item">
                                    <a class="nav-link" id="user-tab" data-toggle="pill" href="{{ route('user.login') }}">User</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  active" id="admin-tab" data-toggle="pill" href="{{ route('admin.login') }}">Admin</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <!-- NIM -->
                    <form id="peminjam-login-form" method="POST" action="{{ route('peminjam.login') }}">
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
                                    Login
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
@endsection