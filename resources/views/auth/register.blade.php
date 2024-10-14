@extends('layouts.main')

@section('regis')
<div class="login-header">
    Registrasi
</div>
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="welcome-text">
                <h4 style="font-weight: bold">Buat Akunmu!</h4>
            </div>
            <div class="login-form">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Buat kata sandi</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password_confirmation">Ulangi kata sandi</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-custom" style="margin-top: 50px">Buat Akun</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Back --}}
<a href="/login" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-left"></i></a>

@endsection
