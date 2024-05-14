@extends('admin.dashboard')
<title>Admin - Danh Sách Sản Phẩm</title>
@section('admin-products')
    <div class="container mt-5 border p-2">
        <a href="{{ route('add_product') }}" class="btn btn-success float-right">Thêm sản phẩm</a>
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
                    <th scope="col">Image1</th>
                    <th scope="col">Image2</th>
                    <th scope="col">Image3</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->p_name }}</td>
                        <td>{{ number_format($item->p_price_old, 0, ',', '.') }} đ</td>
                        <td>{{ number_format($item->p_price_new, 0, ',', '.') }} đ</td>
                        <td style="font-size: 10px;">{{ $item->p_description }}</td>
                        <td class="p-color"><span
                                style="background: {{ $item->p_color }}; font-size: 10px;">{{ $item->p_color }}</span></td>
                        <td>{{ $item->p_type }}</td>
                        <td>{{ $item->p_quantity }}</td>
                        @for ($i = 1; $i <= 3; $i++)
                            <td>
                                @if (!empty($item['p_photo' . $i]))
                                    <img src="{{ asset($item['p_photo' . $i]) }}" alt="Product Image"
                                        style="max-width: 30px;">
                                @endif
                            </td>
                        @endfor
                        <td class="d-flex">
                            <a href="{{ route('edit_product', ['product_id' => $item->product_id]) }}"
                                class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('admin.delete_product', ['product_id' => $item->product_id]) }}"
                                class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                <!-- You can repeat this row structure for each product -->
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
