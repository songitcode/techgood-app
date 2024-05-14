<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;
use Auth;

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
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('avatars');//avatars
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
        Session::flash('success', 'Registration successful!');

        // Redirect to home page
        return redirect()->route('login');
    }

    // Login POST
    function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
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

        return view('auth.product_detail', ['products' => $products]);
    }
}
