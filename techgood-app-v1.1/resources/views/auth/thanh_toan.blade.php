@extends('dashboard');
<link rel="stylesheet" href="{{ asset('front-end/css/abate-style.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/col-md-row.css') }}">
@section('content_abate')
    <div class="breadcrumb">
        <p>Thanh Toán</p>
    </div>
    <section>
        <div class="abate-box row">
            <div class="abate col-md-7-5">
                <div class="info-abate">
                    <h2>Thông tin thanh toán</h2>
                    <div class="name b-info">
                        <label for="name-abate" class="lb-abate">Họ và tên của bạn<span class="span-red">*</span></label>
                        <input type="text" name="name-abate" id="name-abate" class="ip-name ip-abate">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-sdt b-info">
                                <label for="name-abate" class="lb-abate">Số điện thoại<span
                                        class="span-red">*</span></label>
                                <input type="text" name="name-abate" id="name-abate" class="ip-name ip-abate">
                            </div>

                            <div class="d-tp b-info">
                                <label for="name-abate" class="lb-abate">Tỉnh/ thành phố<span
                                        class="span-red">*</span></label>
                                <select name="" id="" class="ip-abate">
                                    <option value="">API TP 1</option>
                                    <option value="">API TP 2</option>
                                    <option value="">API TP 3</option>
                                    <option value="">API TP 4</option>
                                    <option value="">API TP 5</option>
                                    <option value="">API TP 6</option>
                                </select>
                            </div>

                            <div class="d-xp b-info">
                                <label for="name-abate" class="lb-abate">Xã/ phường<span class="span-red">*</span></label>
                                <select name="" id="" class="ip-abate">
                                    <option value="">API XP 1</option>
                                    <option value="">API XP 2</option>
                                    <option value="">API XP 3</option>
                                    <option value="">API XP 4</option>
                                    <option value="">API XP 5</option>
                                    <option value="">API XP 6</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-email b-info">
                                <label for="name-abate" class="lb-abate">Địa chỉ email<span
                                        class="span-red">*</span></label>
                                <input type="text" name="name-abate" id="name-abate" class="ip-name ip-abate">
                            </div>

                            <div class="d-qh b-info">
                                <label for="name-abate" class="lb-abate">Quận/ huyện<span class="span-red">*</span></label>
                                <select name="" id="" class="ip-abate">
                                    <option value="">API XP 1</option>
                                    <option value="">API XP 2</option>
                                    <option value="">API XP 3</option>
                                    <option value="">API XP 4</option>
                                    <option value="">API XP 5</option>
                                    <option value="">API XP 6</option>
                                </select>
                            </div>

                            <div class="d-address b-info">
                                <label for="name-abate" class="lb-abate">Địa chỉ giao hàng cụ thể<span
                                        class="span-red">*</span></label>
                                <input type="text" name="name-abate" id="name-abate" class="ip-name ip-abate"
                                    placeholder="VD: Số 53 Võ Văn Ngân . . .">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-bill col-md-4">
                <div class="info-bill">
                    <h2>Hóa đơn</h2>
                    <div class="bill-title">
                        <p>Sản phẩm</p>
                        <p>Tạm tính</p>
                    </div>
                    <div class="bill-info">
                        <div class="info-product">
                            <p>x1 Lenovo IdeaPad Slim 3 Laptop (12th Gen Intel i3)</p>
                            <p>x1 Apple Watch Cellular 40 mm Starlight Aluminium Case</p>
                            <p>x2 LG 674 litres Side by Side Refrigerator, Noble Steel</p>
                        </div>
                        <div class="price-product">
                            <p>9.390.000 đ</p>
                            <p>3.390.000 đ</p>
                            <p>42.780.000 đ</p>
                        </div>
                    </div>
                    <div class="bill-total">
                        <div>
                            <p>Tạm Tính</p>
                            <p>Tổng tiền</p>
                        </div>
                        <div class="total">
                            <p>55.560.000 đ</p>
                            <p>55.560.000 đ</p>
                        </div>
                    </div>

                    <div class="bill-end">
                        <input type="checkbox" class="ip-accept" name="accept-shop" id="accept-shop"> <span>Tôi đồng ý với
                            các
                            điều khoảng dịch vụ của shop </span>
                        <button type="submit" class="btn-order">Đặt hàng</button>
                    </div>
                </div>
    </section>
@endsection
