@extends('dashboard')

<link rel="stylesheet" href="{{ asset('front-end/css/login-style.css') }}">
@section('content_login')
    <section class="login-view">
        <div class="breadcrumb">
            <p>Đăng nhập</p>
        </div>
        <div class="login-container">
            <div class="form-login">
                <form action="{{ route('auth.login') }}" method="POST">
                    @csrf <!-- Bảo vệ chống tấn công CSRF -->
                    <div class="user">
                        <label for="username" class="lb-text">Tên đăng nhập</label>
                        <input type="text" id="username" name="username" class="form-control">
                    </div>
                    <div class="pass">
                        <label for="password" class="lb-text">Mật khẩu</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <a href="#" class="none-pass">Quên mật khẩu?</a>
                    <button type="submit" class="btn-login">Đăng Nhập</button>
                </form>
                <a href="{{ route('register') }}">Không có tài khoản? Tạo một tài khoản</a>
            </div>
        </div>
    </section>
@endsection
