<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;

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

Route::get('chi-tiet-san-pham', [AuthController::class, 'productDetail'])->name('product_detail');
// Route::get('chi-tiet-san-pham-review', [ReviewController::class, 'listReviews'])->name('product_detail_review');

Route::get('gio-hang-page', [CustomAuthController::class, 'productCartPage'])->name('product_cart');
Route::get('thanh-toan', [CustomAuthController::class, 'thanhToanPage'])->name('thanh_toan');
Route::get('admin-dashboard', [AdminController::class, 'dashboardAdminPage'])->name('admin');

Route::get('admin-add', [AdminController::class, 'addProductAdminPage'])->name('add_product');
Route::post('admin-add', [AdminController::class, 'addProduct'])->name('admin.add_product');

Route::get('delete-product', [AdminController::class, 'deleteProduct'])->name('admin.delete_product');
Route::get('admin-delete-user/{user_id}', [AdminController::class, 'deleteUser'])->name('delete_user');

Route::get('admin-list-product', [AdminController::class, 'listProductAdmin'])->name('admin.list_product');
Route::get('admin-list-user', [AdminController::class, 'listUsersAdmin'])->name('admin.list_users');

Route::get('admin-add-user', [AdminController::class, 'AdminAddUserPage'])->name('add_user');
Route::post('admin-add-user', [AdminController::class, 'store'])->name('admin.add_user');

Route::get('admin/edit-product/{product_id}', [AdminController::class, 'editProduct'])->name('edit_product');
Route::post('admin/update-product/{product_id}', [AdminController::class, 'updateProduct'])->name('update_product');

Route::get('admin-edit-user/{user_id}', [AdminController::class, 'editUser'])->name('edit_user');
Route::post('admin-update-user/{user_id}', [AdminController::class, 'updateUser'])->name('update_user');

// Route::get('admin-list-users', [CustomAuthController::class, 'listUsers'])->name('users.list_users');

// Auth
Route::get('sign-out', [AuthController::class, 'signOut'])->name('signout');
Route::get('login-user', [AuthController::class, 'login'])->name('auth.product_list');
Route::get('dasboard-login', [AuthController::class, 'listUser'])->name('dashboard');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');


Route::get('/', function () {
    return view('welcome');
});
