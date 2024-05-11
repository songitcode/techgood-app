@extends('admin.dashboard')

@section('admin-users')
    <div class="container mt-5">
        <a href="#" class="btn btn-success float-right">Thêm user</a>
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
                <tr>
                    <td>username</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>email@example.com</td>
                    <td>1990-01-01</td>
                    <td><img src="https://via.placeholder.com/150" alt="User Photo" style="max-width: 100px;"></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- You can repeat this row structure for each user -->
            </tbody>
        </table>
    </div>
@endsection
