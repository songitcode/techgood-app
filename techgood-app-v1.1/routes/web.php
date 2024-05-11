<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Controller page
Route::get('login', [CustomAuthController::class, 'loginPage'])->name('login');
// Route::post('/login', 'AuthController@login');


Route::get('dang-ky-page', [CustomAuthController::class, 'registerPage'])->name('register');
Route::get('danh-sach-page', [CustomAuthController::class, 'productsPage'])->name('product_list');
Route::get('chi-tiet-page', [CustomAuthController::class, 'productDetailPage'])->name('product_detail');
Route::get('gio-hang-page', [CustomAuthController::class, 'productCartPage'])->name('product_cart');
Route::get('thanh-toan', [CustomAuthController::class, 'thanhToanPage'])->name('thanh_toan');
Route::get('admin-dashboard', [CustomAuthController::class, 'dashboardAdminPage'])->name('admin');
Route::get('admin-add', [CustomAuthController::class, 'addProductAdminPage'])->name('admin.add_product');
Route::get('admin-products', [CustomAuthController::class, 'listProductsAdminPage'])->name('admin.list_product');
Route::get('admin-users', [CustomAuthController::class, 'listUsersAdminPage'])->name('admin.list_users');

// Auth
Route::get('sign-out', [AuthController::class, 'signOut'])->name('signout');
Route::get('login-user', [AuthController::class, 'login'])->name('auth.product_list');
Route::get('dasboard-login', [AuthController::class, 'listUser'])->name('dashboard');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

Route::get('/', function () {
    return view('auth.product_list');
});
