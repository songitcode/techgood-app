@extends('admin.dashboard')

@section('admin-users')
    <div class="container mt-5">
        <a href="{{ route('admin.add_user') }}" class="btn btn-success float-right">Thêm user</a>
        <h2 class="mb-4">User List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->birthday }}</td>
                        <td><img src="{{ $item->photo }}" alt="User Photo" style="max-width: 100px;"></td>
                        <td>
                            <a href="{{ route('edit_user', ['user_id' => $item->user_id]) }}"
                                class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('delete_user', ['user_id' => $item->user_id]) }}"
                                class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        window.onload = function() {
            @if (Session::has('success'))
                alert("{{ Session::get('success') }}");
            @endif
        };
    </script>
@endsection
