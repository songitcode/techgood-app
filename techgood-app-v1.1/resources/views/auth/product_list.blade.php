@extends('dashboard')
<link rel="stylesheet" href="{{ asset('front-end/css/productlist-style.css') }}">
@section('content_listProducts')
    <section class="list">
        <div class="breadcrumb">
            <p>Tất cả sản phẩm</p>
        </div>
        {{-- product --}}
        <div class="box-product">
            <div class="products">
                <div class="card">
                    <form action="#">
                        <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                        alt="" width="100%" height="200" class="img-product">

                        <div class="info-product">
                            <a href="#" class="link-name">
                                <div class="name-product">
                                    Samsung Galaxy S24 Ultra 12GB 256GB
                                </div>
                            </a>
                            <div class="price">
                                <span class="price-old">29.090.000đ</span>
                                <span class="price-new">33.990.000đ</span>
                            </div>
                            <button type="submit" class="btn-addcart">Thêm vào giỏ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Phan trang --}}
        <div class="pagination">
            <ul>
                <span class="pre"><</span>
                <li class="active">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>...</li>
                <span class="next">></span>
                <!-- Thêm các số trang khác tại đây -->
            </ul>
        </div>
    </section>
@endsection
