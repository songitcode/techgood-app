@extends('admin.dashboard')

@section('admin-edit-category')
    <div class="card container border mt-5 p-3">
        <p class="form-control">{{ $category->cate_id }}</p>
        <label>Danh mục cũ</label>
        <p class="form-control">{{ $category->cate_name }}</p>
        <form action="{{ route('admin.update_category', ['cate_id' => $category->cate_id]) }}" method="POST">
            <label>Tên danh mục thay đổi</label>
            <input type="text" name="cate_name" id="cate_name" class="form-control" value="{{ $category->cate_name }}">
            <button type="submit" class="btn btn-primary float-right mt-4">Lưu thay đổi</button>
        </form>
    </div>
@endsection
