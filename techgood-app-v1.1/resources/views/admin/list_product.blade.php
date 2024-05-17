@extends('admin.dashboard')
<title>Admin - Danh Sách Sản Phẩm</title>
<link rel="stylesheet" href="{{ asset('./front-end/css/productdetail-style.css') }}">
{{-- <script src="{{ asset('front-end/js/details_product.js') }}"></script> --}}
<style>
    .price,
    .name {
        font-size: 10px
    }

    .description-product {
        font-size: 10px
    }

    th {
        font-size: 10px;
        font-weight: 700;
    }

    .toggle-description-btn {
        color: blue;
        cursor: pointer;
    }

    .toggle-description-btn:hover {
        color: red;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('admin-products')
    <div class="container mt-5 border p-2 mb-5">
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
                    <th scope="col">Category</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Image1</th>
                    <th scope="col">Image2</th>
                    <th scope="col">---</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <script>
                    $(document).ready(function() {
                        $(".toggle-description-btn").click(function() {
                            var $this = $(this);
                            var $shortDesc = $this.closest('.description-product').find('.short-description');
                            var $fullDesc = $this.closest('.description-product').find('.full-description');

                            // Toggle between short and full descriptions
                            $shortDesc.toggle();
                            $fullDesc.toggle();

                            // Change button text based on visibility
                            var btnText = $shortDesc.is(':visible') ? 'Xem thêm' : 'Thu gọn';
                            $this.text(btnText);
                        });
                    });
                </script>

                @foreach ($products as $item)
                    <tr>
                        <td class="name">{{ $item->p_name }}</td>
                        <td class="price">{{ number_format($item->p_price_old, 0, ',', '.') }} đ</td>
                        <td class="price">{{ number_format($item->p_price_new, 0, ',', '.') }} đ</td>
                        <td>
                            <div class="description-product">
                                <span class="short-description black-color">
                                    {{ \Illuminate\Support\Str::words($item->p_description, 30, '...') }}
                                </span>
                                <span class="full-description black-color" style="display: none;">
                                    {!! $item->p_description !!}
                                </span>
                                <span class="toggle-description-btn btn-xemthem-{{ $item->product_id }}">Xem thêm</span>
                            </div>
                        </td>
                        <td class="p-color"><span
                                style="background: {{ $item->p_color }}; font-size: 10px;">{{ $item->p_color }}</span></td>
                        <td>{{ $item->p_type }}</td>
                        <td>{{ $item->cate_id }}</td>
                        <td>{{ $item->p_quantity }}</td>
                        @for ($i = 1; $i <= 2; $i++)
                            <td>
                                @if (!empty($item['p_photo' . $i]))
                                    <img src="{{ asset($item['p_photo' . $i]) }}" alt="Product Image"
                                        style="max-width: 30px;">
                                @endif
                            </td>
                        @endfor
                        <td>...</td>
                        <td class="d-flex">
                            <a href="{{ route('edit_product', ['product_id' => $item->product_id]) }}"
                                class="btn btn-primary btn-sm">Sửa</a>
                            <a href="{{ route('admin.delete_product', ['product_id' => $item->product_id]) }}"
                                class="btn btn-danger btn-sm">Xóa</a>
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
