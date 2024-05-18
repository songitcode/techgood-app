<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Cart;
use Session;
use Hash;
use Auth;
use DB;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string',
            'username' => 'required|string|unique:users',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'birthday' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload if photo is provided
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); // Lấy phần mở rộng .jpg, .png...
            $filename = time() . '.' . $extension; // Tạo tên mới cho tệp tin
            $file->move(public_path('avatars/'), $filename);  // Upload vào thư mục 'avatars' trong thư mục 'public'
            // Lưu đường dẫn vào CSDL nếu cần
            $photoPath = 'avatars/' . $filename;
        }

        // Create new user
        $user = new User();
        $user->username = $request->input('username');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->birthday = $request->input('birthday');
        $user->photo = $photoPath;
        $user->save();

        // Store success message in session
        Session::flash('success', 'Đăng ký thành công');

        // Redirect to home page
        return redirect()->route('login');
    }

    // Login POST
    function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // Get the authenticated user
            $user = Auth::user();

            if ($user->username === 'admin' && $request->password === '123456') {
                return redirect()->route('admin')->with('success', 'Đăng nhập thành công!');
            }
            return redirect()->route('product_list')->with('success', 'Đăng nhập thành công!');
        }

        // Đăng nhập thất bại, hiển thị thông báo lỗi
        return back()->withErrors([
            'message' => 'Thông tin đăng nhập không đúng. Vui lòng thử lại!',
        ]);
    }

    // Signout
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        // Redirect to login page
        return redirect('login');
    }

    //
    public function listUser()
    {
        if (Auth::check()) {
            $users = User::all();
            return view('dashboard', ['users' => $users]);
        }
    }

    public function productDetail(Request $request)
    {

        $product_id = $request->get('product_id');
        $products = Products::find($product_id);
        if (!$products) {
            return view('auth.product_detail', ['products' => $products]);
        }

        $similarProducts = Products::where('p_type', $products->p_type)
            ->where('product_id', '!=', $products->product_id)
            ->take(6)
            ->get();


        return view('auth.product_detail', compact('products', 'similarProducts'));
    }

    public function showProductsByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $products = $category->products()->paginate(5);
        return view('auth.product_list', compact('category', 'products'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search-nav');
        $products = DB::table('products')
            ->where('p_name', 'like', "%$keyword%")
            ->orWhere('p_type', 'like', "%$keyword%")
            ->paginate(10);

        if ($products->isEmpty()) {
            $message = "Không có sản phẩm nào cho từ khóa '$keyword'";
        } else {
            $message = "";
        }
        return view('auth.product_list', ['products' => $products, 'message' => $message]);
    }
}
