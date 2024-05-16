    @extends('admin.dashboard')
    <title>Admin - Thêm Sản Phẩm</title>
    @section('admin-add')
        <div class="container mt-5 mb-5">
            <h2 class="mb-4">Add Product Form</h2>
            <form action="{{ route('add_product') }}" method="POST" enctype="multipart/form-data" class="p-5 border">
                @csrf
                <div class="form-group">
                    <label for="productName">Name:</label>
                    <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Enter product name"
                        required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="priceOld">Price Old:</label>
                        <input type="number" class="form-control" id="p_price_old" name="p_price_old"
                            requiredplaceholder="Enter old price">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="priceNew">Price New:</label>
                        <input type="number" class="form-control" id="p_price_new" name="p_price_new"
                            requiredplaceholder="Enter new price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="p_description" name="p_description" rows="3" placeholder="Enter description"></textarea>
                </div>
                <div class="form-group">
                    <label for="p_color">Color:</label>
                    <input type="color" class="form-control" id="p_color" name="p_color">
                    required
                </div>
                <div class="form-row">
                    {{-- <div class="form-group col-md-6">
                        <label for="p_type">Category Product:</label>
                        <input type="text" name="p_type" id="p_type" class="form-control">
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label for="p_type">Type</label>
                        <select name="p_type" id="p_type" class="form-control">
                            @foreach ($category as $cate)
                                <option value="{{ $cate->cate_name }}">{{ $cate->cate_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ml-1">
                        <label for="cate_id">Category Product</label>
                        <select name="cate_id" id="cate_id" class="form-control">
                            <option disabled>Chọn Giống Type</option>
                            @foreach ($category as $cate)
                                <option value="{{ $cate->cate_id }}">{{ $cate->cate_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="p_quantity" name="p_quantity"
                            requiredplaceholder="Enter quantity">
                    </div>
                </div>
                <div class="d-flex">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="form-group ml-1">
                            <label for="image{{ $i }}">Image {{ $i }}:</label>
                            <input type="file" class="form-control-file" id="p_photo{{ $i }}"
                                name="p_photo{{ $i }}" required>
                        </div>
                    @endfor
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    @endsection
