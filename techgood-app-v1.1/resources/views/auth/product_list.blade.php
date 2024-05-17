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
        @if (!empty($message))
            <p>{{ $message }}</p>
        @endif
        <div class="box-product">
            <div class="products">
                @foreach ($products as $item)
                    <div class="card">
                        <form action="{{ route('add_to_cart', ['product_id' => $item->product_id]) }}" method="POST">
                            @csrf
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
                @foreach ($products->getUrlRange($products->currentPage() - 1, $products->currentPage() + 1) as $page => $url)
                    <li class="{{ $page == $products->currentPage() ? 'active' : '' }}">
                        <a href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                {{-- Next Page Link --}}
                @if ($products->hasMorePages())
                    <li><a href="{{ $products->nextPageUrl() }}" rel="next">›</a></li>
                @else
                    <li class="disabled">›</li>
                @endif
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
