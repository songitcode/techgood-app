<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request, $product_id)
    {
        // Kiểm tra người dùng đã đăng nhập chưa
        if (!Auth::check()) {
            // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.');
        }

        // Lấy thông tin sản phẩm từ database
        $product = Products::find($product_id);

        // Kiểm tra sản phẩm có tồn tại không
        if (!$product) {
            abort(404);
        }

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng của người dùng chưa
        $cartItem = Cart::where('user_id', Auth::id())
            ->where('product_id', $product_id)
            ->first();

        // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
        if ($cartItem) {
            $cartItem->quantity++;
            $cartItem->save();
            return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
        }

        // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới vào
        $cart = new Cart();
        $cart->user_id = Auth::id();
        $cart->product_id = $product_id;
        $cart->p_name = $product->p_name;
        $cart->p_price_new = $product->p_price_new;
        $cart->quantity = 1;
        $cart->p_photo1 = $product->p_photo1;
        $cart->save();

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }

    public function remove(Request $request)
    {

        // Lấy product_id từ request
        $cart_id = $request->get('cart_id');

        // Lấy thông tin sản phẩm cần xóa
        $product = Cart::findOrFail($cart_id);

        // Xóa sản phẩm
        $product->delete();

        return redirect()->route('product_cart')->with('success', 'Xóa thành công');
    }

    public function index()
    {
        // Lấy số lượng sản phẩm trong giỏ hàng của người dùng hiện tại
        $cartItemCount = Cart::where('user_id', auth()->id())->count();

        return view('dashboard', compact('cartItemCount'));
    }
}
