<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('./front-end/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./front-end/css/col-md-row.css') }}">
    <link rel="stylesheet" href="{{ asset('./font-awesome/fontawesome-free-6.5.2-web/css/all.min.css') }}">
    <link rel="icon" href="imgs/logo.png" type="image/x-icon">
</head>
<style>

</style>

<body>
    <nav class="header-nav">
        <div class="container">
            <div class="left-nav">
                <ul>
                    <li>Contact</li>
                    <li>About Us</li>
                    <li> FAQs</li>
                </ul>
            </div>
            <div class="right-nav">
                <label for="drop-language">ENGLISH <span
                        style="margin-left:10px ; font-weight: 800; font-size: 15px;">&#8744;</span></label>
                <input class="language-checkbox" type="checkbox" name="drop-language" id="drop-language">
                <div class="language">
                    <ul>
                        <li>English</li>
                        <li>اللغة العربية</li>
                        <li>Chinese</li>
                        <li>Viet Nam</li>
                        <li>Russia</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{--  --}}
    <div class="menu-a">
        <button class="show-menu"><i class="fa-solid fa-bars fa"></i></button>
        <div class="menu-nav">
        </div>
    </div>
    {{--  --}}
    <section class="top">
        <div class="header-top">
            <div class="nav-bar">

                <div class="logo-techgood top-left">
                    <a href="#"><img src="{{ asset('./imgs/logo.png') }}" alt="logo" width="70px"
                            height="70px"></a>
                </div>
                <div class="top-center">
                    <form class="search" action="{{ route('product.search') }}" method="GET">
                        <label for="search-nav" class="lb-search">Tim Kiem</label>
                        <input class="search-input" type="text" placeholder="Bạn muốn tìm gì . . ." name="search-nav"
                            id="search-nav">
                        <button type="submit" class="btn-search">Tìm</button>
                    </form>
                </div>
                <div class="top-right">
                    <div class="grid">
                        <div class="help row">
                            <div class="icon-">
                                <i class="fa fa-phone"
                                    style="color: #255840; font-size: 30px; float: left;  width: 30px; height: 30px;"></i>
                            </div>
                            <div class="item">
                                <p>Cần giúp đỡ ?</p>
                                <p>(+84) 123 123 132</p>
                            </div>

                        </div>
                        <div class="infor-account row">
                            <style>

                            </style>
                            @guest
                                <div class="icon-">
                                    <i class="fa fa-user"
                                        style="color: hsl(152, 41%, 25%); font-size: 30px; float: left; width: 30px; height: 30px;"></i>
                                </div>
                                <p>Tên tài khoản</p>
                                <a class="login link" href="{{ route('login') }}">Đăng Nhập /</a>
                                <a class="register link" href="{{ route('register') }}">Đăng Ký</a>
                            @else
                                <div class="box">
                                    <div class="image-user">
                                        <img src="{{ Auth::user()->photo }}" alt="Avatar" width="50px" height="50px">
                                        <a class="btn-logout" href="{{ route('signout') }}">Đăng Xuất</a>
                                    </div>
                                    <div class="name-user">
                                        xin chào, <br>
                                        <p style="font-weight: 900; color: green;">
                                            {{ Auth::user()->first_name }}
                                            {{ Auth::user()->last_name }}
                                        </p>
                                    </div>
                                </div>
                            @endguest
                        </div>
                        @guest
                        @else
                            <div class="cart row">
                                <div class="icon-"><i class="fa fa-cart-shopping  icon-cart"
                                        style="color: #255840; font-size: 30px; float: left;  width: 30px; height: 30px;"></i>
                                </div>

                                <div class="item">
                                    @php
                                        $cartItemCount = \App\Models\Cart::where('user_id', auth()->id())->count();
                                    @endphp
                                    <a href="{{ route('product_cart') }}" class="cart-link">Giỏ Hàng</a>
                                    <p>SL: {{ $cartItemCount }}</p>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>

        <div class="menu">
            <div class="container-menu menu-top">
                <div class="menu-1 grid-item">
                    <div class="text-drop">Danh mục<span class="icon-show-1">></span>
                    </div>
                    <div class="drop-down">
                        <div class="grid-1">
                            <ul>
                                {{-- Hiển thị danh mục không cần Route điều khiển --}}
                                @php
                                    $categories = DB::table('category')->get();
                                @endphp
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('products.by_category', $category->cate_id) }}">{{ $category->cate_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="grid-2">
                            <ul>
                                <li><b>Danh Muc Grid 2</b></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Âm thanh</a></li>
                                <li><a href="#">Đồng hồ</a></li>
                                <li><a href="#">Phụ kiện</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="menu-2 grid-item">
                    <div class="text-drop">Thương hiệu<span class="icon-show-1">></span></div>
                    <div class="drop-down">
                        <div class="grid-1">
                            <ul>
                                <li><b>Thương hiệu Grid 1</b></li>
                                <li><a href="#">LG</a></li>
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Oppo</a></li>
                                <li><a href="#">Onplus</a></li>
                                <li><a href="#">Xiao mi</a></li>
                                <li><a href="#">Google</a></li>
                            </ul>
                        </div>
                        <div class="grid-2">
                            <ul>
                                <li><b>Thương hiệu Grid 2</b></li>
                                <li><a href="#">Vivo</a></li>
                                <li><a href="#">Infinix</a></li>
                                <li><a href="#">Corsair</a></li>
                                <li><a href="#">Intel</a></li>
                                <li><a href="#">Nokia</a></li>
                                <li><a href="#">Toshiba</a></li>
                                <li><a href="#">Asus</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="menu-3 grid-item">
                    <a href="{{ route('product_list') }}">
                        <div class="text-drop">Tất cả sản phẩm</div>
                    </a>
                    <div class="#">
                    </div>
                </div>
                <div class="menu-4 grid-item">
                    <a href="{{ route('product_cart') }}">
                        <div class="text-drop">Giỏ hàng của tôi</div>
                    </a>
                    <div class="#">
                    </div>
                </div>
                <div class="menu-5 grid-item">
                    <div class="text-drop">Chính sách điều khoản</div>
                    <div class="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- /yield --}}
    @yield('content_home')
    @yield('content_login')
    @yield('content_register')
    @yield('content_listProducts')
    @yield('content_detail')
    @yield('content_cart')
    @yield('content_abate')
    {{-- yield/ --}}
    <!-- footer -->
    <footer>
        <div class="footer-all">
            <div class="fill-bg-top">
                <div class="top-footer row">
                    <div class="text-left col-md-8">
                        <div class="icon-email"><i class="fa fa-envelope"></i></div>
                        <div class="text">
                            <p>Để lại email để chúng tôi có thể thông báo những ưu đãi mới nhất đến với bạn</p>
                            <p>Nhận thông tin cập nhật qua E-mail về của chúng tôi và các ưu đãi đặc biệt.</p>
                        </div>
                    </div>
                    <div class="email-right col-md-4">
                        <form action="#" method="GET" class="form-email">
                            <input type="email" name="email-footer" id="email-footer"
                                placeholder="Email của bạn . . .">
                            <button type="submit" class="btn-sub">Gửi Email</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="fill-bg-center">
                <div class="center-footer">
                    <div class="first-text">
                        <h3 class="text-logo"><b style="color: #238456">Tech</b>Good.</h3>
                        <p class="m-10px">TechGood là website giúp bạn mua sâm trực tuyến <br> các thiết bị công nghệ
                            điện tử một cách
                            dễ
                            dàng, <br>
                            nhanh chống, tiện lợi</p>
                    </div>
                    <div class="last-text">
                        <div class="one-text">
                            <h4>Need help?</h4>
                            <p class="m-10px">TechGood</p>
                            <p class="m-10px ">Contact</p>
                            <i class="fa fa-phone"></i><span class="cl-black font-w-7">+84 123 123 123</span>
                            <div class="line"></div>
                            <i class="fa fa-envelope"></i><span class="cl-black font-w-7">techgood@gmail.com</span>
                        </div>
                        <div class="two-text">
                            <h4>Sản phẩm</h4>
                            <p class="m-10px">Thiết bị điện tử</p>
                            <p>Tai nghe</p>
                            <p class="m-10px">Laptop</p>
                            <p>Điện thoại thông minh</p>
                            <p class="m-10px">Máy tính</p>
                            <p>Thiết bị thông minh</p>
                        </div>
                        <div class="three-text">
                            <h4>Chi nhánh</h4>
                            <p class="m-10px">Tầng 78 landmark 81</p>
                            <p>Tầng 14 tòa nhà bitexco</p>
                            <p class="m-10px">Số 19 chương dương</p>
                        </div>
                        <div class="for-text">
                            <h4>Khác</h4>
                            <p class="m-10px">Theo dõi Đơn hàng</p>
                            <a href="#" class="link-deleted-account">Xóa tài khoản</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="fill-bg-bottom">
                    <div class="text-bt-fot">
                        &copy; 2024 - TechGood software by J&#8482;
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        window.onload = function() {
            @if (Session::has('success'))
                alert("{{ Session::get('success') }}");
            @endif
        };
    </script>
    <script src="{{ asset('front-end/js/dashboard.js') }}"></script>
</body>

</html>
