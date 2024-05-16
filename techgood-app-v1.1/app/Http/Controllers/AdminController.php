<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Storage;

class AdminController extends Controller
{

    // dashboardAdmin page
    public function dashboardAdminPage()
    {
        return view("admin.dashboard");
    }
    // admin-dashboard page
    public function addProductAdminPage()
    {
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }
    // admin-products page
    public function listProductsAdminPage()
    {
        return view("admin.list_product");
    }
    // listUsersAdminPage
    public function listUsersAdmin()
    {
        // return view("admin.list_users");
        $users = User::all();
        return view('admin.list_users', ['users' => $users]);
    }
    // admin-users page
    public function AdminAddUserPage()
    {
        // return view("admin.list_users");
        return view('admin.add_user');
    }

    public function listProductAdmin()
    {
        $products = Products::all();
        return view('admin.list_product', ['products' => $products]);
    }
    public function listCategories()
    {
        $category = Category::all();
        return view('admin.add_product', ['category' => $category]);
    }
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'username' => 'required|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'birthday' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload photo
        // Kiểm tra tệp tin có trường dữ liệu avatar không
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); // Lấy phần mở rộng .jpg, .png...
            $filename = time() . '.' . $extension; // Tạo tên mới cho tệp tin
            $file->move(public_path('avatars/'), $filename);  // Upload vào thư mục 'avatars' trong thư mục 'public'
            // Lưu đường dẫn vào CSDL nếu cần
            $photoPath = 'avatars/' . $filename;
        }

        // Create new user
        $user = new User;
        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->birthday = $request->birthday;
        $user->photo = $photoPath;
        $user->save();

        return redirect()->route('admin.list_users')->with('success', 'User added successfully!');
    }

    public function addProduct(Request $request)
    {
        // Debugging: Output the received form data
        // dd($request->all());
        // var_dump($request->all());die();

        // Kiểm tra và validate dữ liệu được gửi từ form
        $validatedData = $request->validate([
            'p_name' => 'required|string',
            'cate_id' => 'required|numeric',
            'p_price_old' => 'required|numeric',
            'p_price_new' => 'required|numeric',
            'p_description' => 'required|string',
            'p_type' => 'required|string',
            'p_color' => 'required|string',
            'p_quantity' => 'required|numeric',
            'p_photo1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'p_photo2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'p_photo3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'p_photo4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'p_photo5' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Debugging: Output the validated data
        // dd($validatedData);

        $photoPaths = [];

        // Lưu ảnh và tạo đường dẫn
        for ($i = 1; $i <= 5; $i++) {
            if ($request->hasFile('p_photo' . $i)) {
                $file = $request->file('p_photo' . $i);
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . $i . '.' . $extension;
                $file->move(public_path('avatars/'), $filename);
                $photoPaths['p_photo' . $i] = 'avatars/' . $filename;
            }
        }

        // Debugging: Output the photo paths
        // dd($photoPaths);

        // Tạo sản phẩm mới
        $product = new Products();
        $product->p_name = $validatedData['p_name'];
        $product->cate_id = $validatedData['cate_id'];
        $product->p_price_old = $validatedData['p_price_old'];
        $product->p_price_new = $validatedData['p_price_new'];
        $product->p_description = $validatedData['p_description'];
        $product->p_color = $validatedData['p_color'];
        $product->p_type = $validatedData['p_type'];
        $product->p_quantity = $validatedData['p_quantity'];
        $product->p_photo1 = $photoPaths['p_photo1'] ?? null;
        $product->p_photo2 = $photoPaths['p_photo2'] ?? null;
        $product->p_photo3 = $photoPaths['p_photo3'] ?? null;
        $product->p_photo4 = $photoPaths['p_photo4'] ?? null;
        $product->p_photo5 = $photoPaths['p_photo5'] ?? null;

        // Debugging: Output the product data
        // dd($product);

        // Lưu sản phẩm vào cơ sở dữ liệu
        $product->save();
        // var_dump($product);die();
        return redirect()->route('admin.list_product')->with('success', 'Thêm Sản phẩm thành công');
    }

    public function deleteProduct(Request $request)
    {
        // Lấy product_id từ request
        $product_id = $request->get('product_id');

        // Lấy thông tin sản phẩm cần xóa
        $product = Products::findOrFail($product_id);

        // Xóa các tấm ảnh liên quan đến sản phẩm trong thư mục avatars
        for ($i = 1; $i <= 5; $i++) {
            $photoField = 'p_photo' . $i;
            $photoPath = public_path($product->$photoField);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }

        // Xóa sản phẩm
        $product->delete();

        return redirect()->route('admin.list_product')->with('success', 'Xóa thành công');
    }

    public function deleteUser($user_id)
    {
        $user = User::findOrFail($user_id);

        // Xóa luôn ảnh liên quan đến user
        $photoPath = public_path($user->photo);
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }

        // Delete the user
        $user->delete();
        return redirect()->route('admin.list_users')->with('success', 'Xóa thành công');
    }

    public function editProduct($product_id)
    {
        $product = Products::find($product_id);
        return view('admin.edit_product', compact('product'));
    }

    public function updateProduct(Request $request, $product_id)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'p_name' => 'required|string',
            'p_price_old' => 'required|numeric',
            'p_price_new' => 'required|numeric',
            'p_description' => 'required|string',
            'p_color' => 'required|string',
            'p_type' => 'required|string',
            'p_quantity' => 'required|numeric',
            'p_photo1' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'p_photo2' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'p_photo3' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'p_photo4' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'p_photo5' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Products::find($product_id);

        // Update product details
        $product->p_name = $validatedData['p_name'];
        $product->p_price_old = $validatedData['p_price_old'];
        $product->p_price_new = $validatedData['p_price_new'];
        $product->p_description = $validatedData['p_description'];
        $product->p_color = $validatedData['p_color'];
        $product->p_type = $validatedData['p_type'];
        $product->p_quantity = $validatedData['p_quantity'];

        // Handle image uploads if present
        for ($i = 1; $i <= 5; $i++) {
            if ($request->hasFile('p_photo' . $i)) {
                $file = $request->file('p_photo' . $i);
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . $i . '.' . $extension;
                $file->move(public_path('avatars/'), $filename);
                $product['p_photo' . $i] = 'avatars/' . $filename;
            }
        }

        // Save the updated product
        $product->save();

        return redirect()->route('admin.list_product')->with('success', 'Sửa thành công !');
    }
    public function editUser($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('admin.edit_user', compact('user'));
    }

    public function updateUser(Request $request, $user_id)
    {
        // Validate request data
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username,' . $user_id . ',user_id',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user_id . ',user_id',
            'birthday' => 'required|date',
            'photo' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the user by ID
        $user = User::findOrFail($user_id);

        // Update user details
        $user->username = $validatedData['username'];
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->email = $validatedData['email'];
        $user->birthday = $validatedData['birthday'];

        // Handle photo upload if present
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('avatars/'), $filename);
            $user->photo = 'avatars/' . $filename;
        }

        // Save the updated user
        $user->save();

        // Redirect back with success message
        return redirect()->route('admin.list_users')->with('success', 'Sửa user thành công');
    }
}
