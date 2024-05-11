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
                    <tr>
                        <td>
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="..." width="50" height="50">
                        </td>
                        <td>Name product here</td>
                        <td>Price product here</td>
                        <td>
                            <div class="box-number">
                                <div class="minus">-</div>
                                <div class="numbers">1</div>
                                <div class="plus">+</div>
                            </div>
                        </td>
                        <td>15.000.000 đ</td>
                        <td>
                            <button type="button" class="btn-delete">X</button>
                        </td>
                    </tr>
                    {{-- /foreach --}}
                    <tr>
                        <td>
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="..." width="50" height="50">
                        </td>
                        <td>Name product here</td>
                        <td>Price product here</td>
                        <td>
                            <div class="box-number">
                                <div class="minus">-</div>
                                <div class="numbers">1</div>
                                <div class="plus">+</div>
                            </div>
                        </td>
                        <td>15.000.000 đ</td>
                        <td>
                            <button type="button" class="btn-delete">X</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="..." width="50" height="50">
                        </td>
                        <td>Name product here</td>
                        <td>Price product here</td>
                        <td>
                            <div class="box-number">
                                <div class="minus">-</div>
                                <div class="numbers">1</div>
                                <div class="plus">+</div>
                            </div>
                        </td>
                        <td>15.000.000 đ</td>
                        <td>
                            <button type="button" class="btn-delete">X</button>
                        </td>
                    </tr>
                </table>
                <a href="{{ route('product_list') }}" class="btn-comeback">&#8592; Quay lại danh sách</a>
            </div>
            <div class="col-md-3 table-total">
                <h2>Cộng giỏ hàng</h2>
                <div class="box-total">
                    <div class="provisional">
                        <p>Tạm tính</p>
                        <p>15.000.000 đ</p>
                    </div>
                    <br>
                    <div class="total">
                        <p>Tổng tiền</p>
                        <p>15.000.000 đ</p>
                    </div>
                </div>
                <button type="button" class="btn-order">Tiến hành đặt hàng</button>
            </div>
        </div>
    </section>
@endsection
