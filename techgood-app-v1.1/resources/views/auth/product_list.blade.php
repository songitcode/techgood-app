@extends('dashboard')
<link rel="stylesheet" href="{{ asset('front-end/css/productlist-style.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/col-md-row.css') }}">
<title>Danh sách sản phẩm</title>
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
                            <a href="{{ route('product_detail', ['product_id' => $item->product_id]) }}"
                                class="product-link">
                                <img src="{{ asset($item->p_photo1) }}" alt="" class="img-product" width="100%">
                            </a>
                            <div class="info-product">
                                <a href="{{ route('product_detail', ['product_id' => $item->product_id]) }}"
                                    class="link-name">
                                    <div class="name-product">
                                        {{ \Illuminate\Support\Str::words($item->p_name, 5, '...') }}
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
    <script>
        window.onload = function() {
            @if (Session::has('success'))
                alert("{{ Session::get('success') }}");
            @endif
        };
    </script>
@endsection
