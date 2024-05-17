<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;

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
Route::get('admin', [AdminController::class, 'dashboardAdminPage'])->name('admin');

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

// List category hien thi trong form them san pham
Route::get('admin-categories', [AdminController::class, 'listCategories'])->name('listCategory');

Route::get('admin/categories/page', [CustomAuthController::class, 'listCategoriesPage'])->name('admin.list_categories');
Route::get('admin-add-category', [CustomAuthController::class, 'categoryAddPage'])->name('admin.add_category');

Route::post('admin-add-category', [CategoryController::class, 'addCategory'])->name('add_category');
Route::get('admin/edit-category/{cate_id}', [CategoryController::class, 'editCategory'])->name('edit_category');
Route::get('admin-delete-category/{cate_id}', [CategoryController::class, 'deleteCategory'])->name('delete_category');
Route::post('admin/update-category/{cate_id}', [CategoryController::class, 'updateCategory'])->name('admin.update_category');

// Add to cart
Route::post('/add-to-cart/{product_id}', [CartController::class, 'addToCart'])->name('add_to_cart');
// Route::get('show-cart', [CartController::class, 'showCart'])->name('show_cart');

Route::get('products/category/{categoryId}', [AuthController::class, 'showProductsByCategory'])->name('products.by_category');

Route::get('remove-cart/{cart_id}', [CartController::class, 'remove'])->name('remove_cart');

Route::get('/search', [AuthController::class, 'search'])->name('product.search');

// Route::get('chi-tiet-san-pham/{product_id}', [AuthController::class, 'sanPhamTuongTu'])->name('product.sanphamtuongtu');
// Auth
Route::get('sign-out', [AuthController::class, 'signOut'])->name('signout');
Route::get('login-user', [AuthController::class, 'login'])->name('auth.product_list');
Route::get('dasboard-login', [AuthController::class, 'listUser'])->name('dashboard');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');


Route::get('/', function () {
    return view('auth.login');
});
