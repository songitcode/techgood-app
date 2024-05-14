@extends('dashboard')
<link rel="stylesheet" href="{{ asset('./front-end/css/productdetail-style.css') }}">
{{-- <link rel="stylesheet" href="bootstrap/public-bootstrap/css/bootstrap.min.css"> --}}
<script src="{{ asset('front-end/js/details_product.js') }}"></script>
<title>{{ $products->p_name }}</title>
@section('content_detail')
    <div class="breadcrumb">
        <p>Chi tiết sản phẩm - {{ $products->p_type }}</p>
    </div>
    <section class="box-details">
        <form action="#" class="form-details">
            @csrf
            <div class="img-details">
                <div class="box-imgs">
                    <div class="imgs-left">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="img-small">
                                <img src="{{ asset($products['p_photo' . $i]) }}" alt="imgs none" width="100"
                                    height="100">
                            </div>
                        @endfor
                    </div>
                    <div class="imgs-right img-large">
                        <img src="{{ $products->p_photo1 }}" alt="" width="500" height="508">
                    </div>
                </div>
            </div>
            <div class="text-details">
                <div class="name-product">
                    {{ $products->p_name }}
                </div>
                <div class="price-product">
                    <span class="price-new"
                        style="font-size: 25px; font-weight: 900; margin-right: 10px;">{{ number_format($products->p_price_new, 0, ',', '.') }}
                        VNĐ</span>
                    <span class="price-old">{{ number_format($products->p_price_old, 0, ',', '.') }} đ</span>
                </div>
                <div class="description-product">{{ $products->p_description }}</div>
                <div class="color-product">
                    <p>Màu:</p>
                    <span class="color" style="background: {{ $products->p_color }}; "></span>
                    {{-- <label for="color" class="color"></label>
                    <input type="radio" name="color" id="color">

                    <label for="color" class="color"></label>
                    <input type="radio" name="color" id="color">

                    <label for="color" class="color"></label>
                    <input type="radio" name="color" id="color"> --}}
                </div>
                <div class="type-product">
                    <p>Kiểu máy:</p>
                    {{ $products->p_type }}
                    {{-- <select name="type-model" id="type-model">
                        <option value="model"></option>
                        <option value="model">Kiểu máy 2</option>
                        <option value="model">Kiểu máy 3</option>
                    </select> --}}
                </div>
                <div class="quantity-product">
                    <p>Số lượng:</p>
                    <div class="box-number">
                        <div class="minus">-</div>
                        <div class="numbers">1</div>
                        <div class="plus">+</div>
                    </div>
                </div>
                <div class="addtocard">
                    <button type="submit" class="d-btn-addtocart">Thêm vào giỏ</button>
                </div>
            </div>
        </form>

        <div class="info-detail">
            <div class="thong-so">
                <h3>Thông số kỹ thuật</h3>
                <div class="box-thongso">
                    <ul class="technical-content">
                        <li class="item-content">
                            <p class="items">CPU</p>
                            <div class="info-tech">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                quisquam molestiae
                                commodi tempora tenetur agendi doloribus.</div>
                        </li>
                        <li class="item-content">
                            <p class="items">WIFI</p>
                            <div class="info-tech">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                quisquam molestiae
                                commodi tempora tenetur agendi doloribus.</div>
                        </li>
                        <li class="item-content">
                            <p class="items">Modem</p>
                            <div class="info-tech">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                quisquam molestiae
                                commodi tempora tenetur agendi doloribus.</div>
                        </li>
                        <li class="item-content">
                            <p class="items">Hardware</p>
                            <div class="info-tech">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                quisquam molestiae
                                commodi tempora tenetur agendi doloribus.</div>
                        </li>
                        <li class="item-content">
                            <p class="items">LAN</p>
                            <div class="info-tech">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                quisquam molestiae
                                commodi tempora tenetur agendi doloribus.</div>
                        </li>
                        <li class="item-content">
                            <p class="items">Thong so co ten dai vai cut lam ne</p>
                            <div class="info-tech">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                quisquam molestiae
                                commodi tempora tenetur agendi doloribus.</div>
                        </li>
                        <li class="item-content">
                            <p class="items">Thong so co ten dai vai cut lam ne</p>
                            <div class="info-tech">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                quisquam molestiae
                                commodi tempora tenetur agendi doloribus.</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="same-products">
                <h3>Sản phẩm tương tự</h3>
                <div class="box-product">
                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Tên sản phẩm này rất dài đó nha</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>

                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Blanditiis harum velit dolor cum assumenda sunt?</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>

                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Tên sản phẩm này rất dài đó nha</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>

                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Tên sản phẩm này rất dài đó nha</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>

                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Tên sản phẩm này rất dài đó nha</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>

                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Tên sản phẩm này rất dài đó nha</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Đánh giá --}}
        <div class="evalute-box row">
            <div class="list-evalute col-md-7-5">
                <div class="row">
                    <h2 class="col-md-8">Đánh giá & nhận xét (tên sản phẩm)</h2>
                    <div class="col-md-4 total-evalute">
                        <h2>2/5</h2>
                        <div class="icon">
                            <span><i class="fa-sharp fa-solid fa-star c-255840"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star c-255840"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row info-evalute">
                    <div class="star-evalute col-md-3">
                        <span><i class="fa-sharp fa-solid fa-star text-eva"></i></span>
                        <span><i class="fa-sharp fa-solid fa-star text-eva"></i></span>
                        <span><i class="fa-sharp fa-solid fa-star text-eva"></i></span>
                        <span><i class="fa-sharp fa-solid fa-star text-eva"></i></span>
                        <span><i class="fa-sharp fa-solid fa-star text-eva"></i></span>
                        <span class="text-eva date-eva">29/03/2024</span>
                        <h5 class="name-eva">Tên user</h5>
                    </div>
                    <div class="col-md-9">
                        <span style="color: #000"> Sản phẩm quá dở 1 sao</span>
                    </div>
                </div>

                <div class="additional-info" style="display: none;">
                    <div class="row info-evalute">
                        <div class="star-evalute col-md-3">
                            <span><i class="fa-sharp fa-solid fa-star text-eva c-255840"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star text-eva c-255840"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star text-eva c-255840"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star text-eva c-255840"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star text-eva"></i></span>
                            <span class="text-eva date-eva">29/03/2024</span>
                            <h5 class="name-eva">Tên user</h5>
                        </div>
                        <div class="col-md-9">
                            <span style="color: #000"> Good 👌</span>
                        </div>
                    </div>
                    <div class="row info-evalute">
                        <div class="star-evalute col-md-3">
                            <span><i class="fa-sharp fa-solid fa-star text-eva c-255840"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star text-eva c-255840"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star text-eva c-255840"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star text-eva c-255840"></i></span>
                            <span><i class="fa-sharp fa-solid fa-star text-eva"></i></span>
                            <span class="text-eva date-eva">29/03/2024</span>
                            <h5 class="name-eva">Tên user</h5>
                        </div>
                        <div class="col-md-9">
                            <span style="color: #000"> Good 👌</span>
                        </div>
                    </div>
                </div>
                <div class="btn-container">
                    <button type="button" class="btn-seemore">Xem thêm</button>
                </div>
            </div>
            <div class="table-evalute col-md-4">
                <form action="#" method="POST">
                    @csrf
                    <h1>Thêm đánh giá</h1>
                    <div class="danh-gia">
                        <p>Đánh giá của bạn <span style="color: red; font-weight: 800;">*</span></p>
                        <div class="tbl-star-evalute">
                            <div class="star">
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                            </div>
                            <div class="star">
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                            </div>
                            <div class="star">
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                            </div>
                            <div class="star">
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                            </div>
                            <div class="star">
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                                <i class="fa-sharp fa-solid fa-star text-eva star-review"></i>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="starRating" name="starRating" value="">
                    <div class="area-comment">
                        <p>Nhận xét của bạn <span style="color: red; font-weight: 800;">*</span></p>
                        <map name="comment">
                            <textarea name="comment" id="comment" cols="10" rows="5" placeholder="VD: sản phẩm tốt, . . ."></textarea>
                        </map>
                    </div>
                    <div class="row info-comment">
                        <div class="eva-name col-md-5">
                            <p>Tên <span style="color: red; font-weight: 800;">*</span></p>
                            <input type="text" placeholder="Tên của bạn" class="i-name-eva" name="i-name-eva"
                                required>
                        </div>
                        <div class="eva-email col-md-5">
                            <p>Email <span style="color: red; font-weight: 800;">*</span></p>
                            <input type="text" placeholder="Email của bạn" class="i-email-eva" name="i-email-eva"
                                required>
                        </div>
                    </div>
                    <div class="container-btn">
                        <button type="submit" class="btn-danhGia">Gửi đánh giá</button>
                    </div>
                </form>
            </div>
        </div>
</section @endsection
