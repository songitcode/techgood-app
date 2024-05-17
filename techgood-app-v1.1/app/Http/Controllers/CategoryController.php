<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $validatedData = $request->validate([
            'cate_name' => 'required|string',
        ]);

        $category = new Category();
        $category->cate_name = $validatedData['cate_name'];

        $category->save();
        return redirect()->route('admin.list_categories')->with('success', 'Thêm Danh mục thành công');
    }
    public function deleteCategory($cate_id)
    {
        $category = Category::findOrFail($cate_id);

        // Delete the user
        $category->delete();
        return redirect()->route('admin.list_categories')->with('success', 'Xóa thành công');
    }

    public function editCategory($cate_id)
    {
        $category = Category::find($cate_id);
        return view('admin.edit_category', compact('category'));
    }
    public function updateCategory(Request $request, $cate_id)
    {
        $validatedData = $request->validate([
            'cate_name' => 'required|string',
        ]);

        $category = Category::find($cate_id);

        $category->cate_name = $validatedData['cate_name'];

        $category->save();

        return redirect()->route('admin.list_categories')->with('success', 'Sửa thành công !');
    }
}
