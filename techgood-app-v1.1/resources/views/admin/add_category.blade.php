@extends('admin.dashboard')

@section('admin-add-category')
    <form action="{{ route('add_category') }}" method="POST" class="form-register card container mt-5 p-3">
        @csrf
        <div class="input-data">
            <div class="form-group">
                <label for="cate_name">Tên danh mục</label>
                <input placeholder="Category" class="form-control" type="text" id="cate_name" name="cate_name" required>
            </div>

            <div class="check-link">
                <button type="submit" class="btn btn-primary float-end">ADD</button>
            </div>
    </form>
@endsection
