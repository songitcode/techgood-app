<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    {{-- <link rel="stylesheet" href="{{ asset('/bootstrap/public-bootstrap/css/bootstrap.min.css') }}"> --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="m-5">Admin: Name</h2>
        <div class="row border p-3">
            <div class="col-lg-4"><a href="{{ route('admin.list_product') }}" class="btn btn-primary">Danh sách sản
                    phẩm</a></div>
            <div class="col-lg-4"><a href="{{ route('admin.list_users') }}" class="btn btn-primary">Danh sách user</a>
            </div>
            <div class="col-lg-4"><a href="" class="btn btn-danger">Đăng xuất</a></div>
        </div>
    </div>
    </div>
    @yield('admin-add')
    @yield('admin-products')
    @yield('admin-users')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
