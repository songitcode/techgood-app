@extends('dashboard')
<link rel="stylesheet" href="{{ asset('./front-end/css/productcart-style.css') }}">
<link rel="stylesheet" href="{{ asset('./front-end/css/productdetail-style.css') }}">
@section('content_cart')
    <div class="breadcrumb">
        <p>Giỏ hàng</p>
    </div>

    <section>
        <div class="box-cart row">
            <div class="col-md-7-5 table-cart">
                <table>
                    <tr>
                        <th>Ảnh</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tạm Tính</th>
                        <th>Xóa</th>
                    </tr>
                    {{-- Hiển thị danh sách sản phẩm thêm đặt vòng foreach tại đây --}}
                    @foreach ($cartItems as $product)
                        <tr>
                            <td>
                                <img src="{{ $product['p_photo1'] }}" class="img-product" alt="Product Image" width="50"
                                    height="50">
                            </td>
                            <td>{{ $product['p_name'] }}</td>
                            <td>{{ number_format($product['p_price_new'], 0, ',', '.') }}đ</td>
                            <td>
                                <div class="box-number">
                                    <div class="numbers">{{ $product['quantity'] }}</div>
                                </div>
                            </td>
                            <td>{{ number_format($product['p_price_new'] * $product['quantity'], 0, ',', '.') }}đ</td>
                            <td>
                                <a href="{{ route('remove_cart', ['cart_id' => $product->cart_id]) }}"
                                    class="btn-delete">X</a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- /foreach --}}
                </table>
                <a href="{{ route('product_list') }}" class="btn-comeback">&#8592; Quay lại danh sách</a>
            </div>
            <div class="col-md-3 table-total">
                <h2>Cộng giỏ hàng</h2>
                <div class="box-total">
                    <div class="provisional">
                        <p>Tạm tính</p>
                        @php
                            $subtotal = 0; // Khởi tạo biến subtotal
                        @endphp
                        @foreach ($cartItems as $product)
                            @php
                                $subtotal += $product['p_price_new'] * $product['quantity']; // Tính tổng tiền cho mỗi sản phẩm
                            @endphp
                        @endforeach
                        <p>{{ number_format($subtotal, 0, ',', '.') }} đ</p> <!-- Hiển thị tạm tính -->
                    </div>
                    <br>
                    <div class="total">
                        <p>Tổng tiền</p>
                        <p>{{ number_format($subtotal, 0, ',', '.') }} đ</p> <!-- Hiển thị tổng tiền -->
                    </div>
                </div>

                <button type="button" class="btn-order">Tiến hành đặt hàng</button>
            </div>
        </div>
    </section>
@endsection
