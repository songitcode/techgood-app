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
                @foreach ($products as $item)
                    <div class="card">
                        <form action="#">
                            <a href="{{ route('product_detail', ['product_id' => $item->product_id]) }}">
                                <img src="{{ asset($item->p_photo1) }}" alt="" width="100%" height="200"
                                    class="img-product">
                            </a>

                            <div class="info-product">
                                <a href="#" class="link-name">
                                    <div class="name-product">
                                        {{ $item->p_name }}
                                    </div>
                                </a>
                                <div class="price">
                                    <span class="price-old">{{ number_format($item->p_price_old, 0, ',', '.') }} đ</span>
                                    <span class="price-new">{{ number_format($item->p_price_new, 0, ',', '.') }} đ</span>
                                </div>
                                <button type="submit" class="btn-addcart">Thêm vào giỏ</button>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Phan trang --}}
        <div class="pagination">
            <ul>
                <span class="pre">
                    < </span>
                        <li class="active">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>...</li>
                        <span class="next">></span>
            </ul>
        </div>
    </section>
@endsection
