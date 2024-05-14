<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
@extends('admin.dashboard')
@section('update-user')
    <div class="container border p-3 mt-5">
        <h1>Edit User</h1>
        <form action="{{ route('update_user', ['user_id' => $user->user_id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="username">ID:</label>
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $user->user_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}"
                    required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}"
                    required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}"
                    required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                    required>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}"
                    required>
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
                <img src="{{ asset($user->photo) }}" alt="User Photo" style="max-width: 100px;">
            </div>
            <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
        </form>
    </div>
@endsection
