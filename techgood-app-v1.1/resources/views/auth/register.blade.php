@extends('dashboard')
<link rel="stylesheet" href="{{ asset('front-end/css/register-style.css') }}">
@section('content_register')
    <div class="breadcrumb">
        <p>Đăng ký</p>
    </div>
    <h1>Tạo tài khoản</h1>
    <section class="view-register">
        <div class="card-register">
            <form action="{{ route('auth.register') }}" method="POST" class="form-register" enctype="multipart/form-data">
                @csrf
                <div class="input-data">
                    <div class="div-firt box-class">
                        <label for="first_name">Tên đăng nhập</label>
                        <input placeholder="Username" class="input-class" type="text" id="username" name="username"
                            required>
                    </div>
                    <div class="div-firt box-class">
                        <label for="first_name">Tên đầu</label>
                        <input placeholder="Tên đầu" class="input-class" type="text" id="first_name" name="first_name"
                            required>
                    </div>
                    <div class="div-last box-class">
                        <label for="last_name">Tên cuối</label>
                        <input placeholder="Tên cuối" class="input-class" type="text" id="last_name" name="last_name"
                            required>
                    </div>
                    <div class="div-email box-class">
                        <label for="email">Email</label>
                        <input placeholder="Email" class="input-class" type="email" id="email" name="email"
                            required>
                    </div>
                    <div class="div-password box-class">
                        <label for="password">Mật khẩu</label>
                        <input placeholder="Mật khẩu" class="input-class" type="password" id="password" name="password"
                            required>
                    </div>
                    <div class="div-birthday box-class">
                        <label for="birthday">Sinh nhật</label>
                        <input class="input-class" type="date" id="birthday" name="birthday" required>
                    </div>
                    <div class="div-photo box-class">
                        <label for="photo">Avatar</label>
                        <input class="input-class" type="file" id="photo" name="photo" required>
                    </div>
                </div>
                <div class="check-link">
                    <button type="submit" class="btn-register">Đăng ký</button>
                </div>
            </form>
        </div>
    </section>
@endsection
