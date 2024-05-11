<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    // login page
    public function loginPage()
    {
        return view("auth.login");
    }
    // index page
    public function dashboardAdminPage()
    {
        return view("admin.dashboard");
    }
    // admin-dashboard page
    public function addProductAdminPage()
    {
        return view("admin.add_product");
    }
    // admin-products page
    public function listProductsAdminPage()
    {
        return view("admin.list_product");
    }
    // admin-users page
    public function listUsersAdminPage()
    {
        return view("admin.list_users");
    }
    // register page
    public function registerPage()
    {
        return view("auth.register");
    }

    // list products page
    public function productsPage()
    {
        return view("auth.product_list");
    }

    // detail product page
    public function productDetailPage()
    {
        return view("auth.product_detail");
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
}
