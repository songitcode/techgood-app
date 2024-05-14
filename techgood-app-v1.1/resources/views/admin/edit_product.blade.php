@extends('admin.dashboard')
@section('update-product')
    <div class="container border p-3 mt-5">
        <h1>Edit Product</h1>
        <form action="{{ route('update_product', ['product_id' => $product->product_id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="productName">Name:</label>
                <input type="text" class="form-control" id="p_name" name="p_name" value="{{ $product->p_name }}"
                    required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="priceOld">Price Old:</label>
                    <input type="number" class="form-control" id="p_price_old" name="p_price_old"
                        value="{{ $product->p_price_old }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="priceNew">Price New:</label>
                    <input type="number" class="form-control" id="p_price_new" name="p_price_new"
                        value="{{ $product->p_price_new }}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="p_description" name="p_description" rows="3" required>{{ $product->p_description }}</textarea>
            </div>
            <div class="form-group">
                <label for="p_color">Color:</label>
                <input type="color" class="form-control" id="p_color" name="p_color" value="{{ $product->p_color }}"
                    required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="p_type">Category Product:</label>
                    <input type="text" name="p_type" id="p_type" class="form-control" value="{{ $product->p_type }}"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" id="p_quantity" name="p_quantity"
                        value="{{ $product->p_quantity }}" required>
                </div>
            </div>
            @for ($i = 1; $i <= 5; $i++)
                <div class="form-group">
                    <label for="image{{ $i }}">Image {{ $i }}:</label>
                    <input type="file" class="form-control-file" id="p_photo{{ $i }}"
                        name="p_photo{{ $i }}">
                    <img src="{{ asset($product['p_photo' . $i]) }}" alt="Product Image" style="max-width: 100px;">
                </div>
            @endfor
            <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
        </form>
    </div>
@endsection
