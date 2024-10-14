@extends('layouts.main')

@section('login')
<div class="login-header">
    Login
</div>
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="welcome-text">
                <h4 style="font-weight: bold">Selamat Datang di Pintukeluar!</h4>
            </div>
            <div class="login-form">
                <form method="POST" action="#">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <small class="form-text text-right">
                            <a href="#">Lupa kata sandi?</a>
                        </small>
                    </div>
                    <button type="submit" class="btn btn-custom mt-2">Masuk</button>
                </form>
                <div class="register-link">
                    Tidak punya akun? <a href="/regis">Registrasi di sini</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Back --}}
<a href="/" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-left"></i></a>

@endsection
