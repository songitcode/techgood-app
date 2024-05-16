<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Products;

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
        $products = Products::all();
        return view('auth.product_list', ['products' => $products]);
    }

    // cart product page
    public function productCartPage()
    {
        return view("auth.product_cart");
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

    // Phương thức để hiển thị sản phẩm theo danh mục

}
