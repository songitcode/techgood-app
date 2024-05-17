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
                    <tr>
                        <td>
                            Giỏ hàng của bạn trống
                        </td>
                </table>
                <a href="{{ route('product_list') }}" class="btn-comeback">&#8592; Quay lại danh sách</a>
            </div>
            <div class="col-md-3 table-total">
                <h2>Cộng giỏ hàng</h2>
                <div class="box-total">
                    <div class="provisional">
                        <p>Tạm tính</p>
                        <p></p>
                    </div>
                    <br>
                    <div class="total">
                        <p>Tổng tiền</p>
                        <p></p>
                    </div>
                </div>
                <button type="button" class="btn-order">Tiến hành đặt hàng</button>
            </div>
        </div>
    </section>
    </section>
@endsection
