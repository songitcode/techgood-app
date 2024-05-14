@extends('admin.dashboard')
<link rel="stylesheet" href="{{ asset('/bootstrap/public-bootstrap/css/bootstrap.min.css') }}">

@section('admin-add-user')
    <form action="{{ route('add_user') }}" method="POST" class="form-register card container mt-5 p-3"
        enctype="multipart/form-data">
        @csrf
        <div class="input-data">
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input placeholder="Username" class="form-control" type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="first_name">Tên đầu</label>
                <input placeholder="Tên đầu" class="form-control" type="text" id="first_name" name="first_name">
            </div>
            <div class="form-group">
                <label for="last_name">Tên cuối</label>
                <input placeholder="Tên cuối" class="form-control" type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input placeholder="Email" class="form-control" type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input placeholder="Mật khẩu" class="form-control" type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="birthday">Sinh nhật</label>
                <input class="form-control" type="date" id="birthday" name="birthday" required>
            </div>
            <div class="form-group">
                <label for="photo">Avatar</label>
                <input class="form-control-file" type="file" id="photo" name="photo" required>
            </div>
        </div>
        <div class="check-link">
            <button type="submit" class="btn btn-primary float-end">ADD</button>
        </div>
    </form>
@endsection
