<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Products;
use App\Models\Cart;
use Auth;

class CustomAuthController extends Controller
{
    // login page
    public function loginPage()
    {
        return view("auth.login");
    }
    // register page
    public function registerPage()
    {
        return view("auth.register");
    }

    // list products page
    public function productsPage()
    {
        // return view("auth.product_list");
        // $products = Products::all();
        // return view('auth.product_list', ['products' => $products]);

        $products = Products::paginate(5); // Phân trang với mỗi trang có tối đa 10 sản phẩm
        return view('auth.product_list', compact('products'));
    }

    // cart product page
    public function productCartPage()
    {
        // Lấy danh sách sản phẩm trong giỏ hàng của người dùng hiện tại
        $cartItems = Cart::where('user_id', Auth::id())->with('products')->get();

        if (!$cartItems) {
            return view('auth.emty_cart');
        }
        return view('auth.product_cart', compact('cartItems'));

        // Nếu giỏ hàng có sản phẩm, hiển thị trang giỏ hàng với danh sách sản phẩm
        // return view('auth.product_cart', compact('cart'));
    }

    // abate(thanh toan) page
    public function thanhToanPage()
    {
        return view("auth.thanh_toan");
    }

    // home page
    public function homePage()
    {
        return view("auth.home");
    }

    // add category page
    public function categoryAddPage()
    {
        return view("admin.add_category");
    }


    // listCategoriesPage
    public function listCategoriesPage()
    {
        return view("admin.list_categories");
    }
    // Phương thức để hiển thị sản phẩm theo danh mục

}
