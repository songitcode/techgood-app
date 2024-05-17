@extends('admin.dashboard')

@section('admin-list-category')
    @php
        $categories = DB::table('category')->get();
    @endphp
    <div class="container mt-5">
        <a href="{{ route('admin.add_category') }}" class="btn btn-success float-right mb-3">Thêm danh mục</a>
        <table class="border table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th></th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->cate_id }}</td>
                    <td>{{ $category->cate_name }}</td>
                    <td class="float-end">
                        <a href="{{ route('edit_category', ['cate_id' => $category->cate_id]) }}">
                            <button class="btn btn-primary">Sửa</button>
                        </a>

                        <a href="{{ route('delete_category', ['cate_id' => $category->cate_id]) }}">
                            <button class="btn btn-danger">Xóa</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
