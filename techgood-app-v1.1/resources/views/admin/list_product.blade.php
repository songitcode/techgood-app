@extends('admin.dashboard')

@section('admin-products')
    <div class="container mt-5 border p-5">
        <a href="{{ route('admin.add_product') }}" class="btn btn-success float-right">Thêm sản phẩm</a>
        <h2 class="mb-4">Product List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price Old</th>
                    <th scope="col">Price New</th>
                    <th scope="col">Description</th>
                    <th scope="col">Color</th>
                    <th scope="col">Product Type</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product Name</td>
                    <td>$100</td>
                    <td>$80</td>
                    <td>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                    <td><span style="color: blue;">Blue</span></td>
                    <td>Type 1</td>
                    <td>10</td>
                    <td><img src="https://via.placeholder.com/150" alt="Product Image" style="max-width: 100px;"></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- You can repeat this row structure for each product -->
            </tbody>
        </table>
    </div>
@endsection
