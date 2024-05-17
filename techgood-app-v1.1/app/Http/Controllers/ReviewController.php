<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Products;

class ReviewController extends Controller
{
    public function listReviews()
    {
        $reviews = Review::all();
        return view('auth.product_detail', ['reviews' => $reviews]);
    }

    public function showReviewForm($product_id)
    {
        $product = Products::findOrFail($product_id);
        return view('auth.product_detail', compact('product'));
    }

    public function storeReview(Request $request, $product_id)
    {
        // Validate the request
        $request->validate([
            'star_rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:255',
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
        ]);

        var_dump($request);die();
        $starRating = $request->star_rating;
        $comment = $request->comment;
        $name = $request->name;
        $email = $request->email;

        Review::create([
            'product_id' => $product_id,
            'star_rating' => $starRating,
            'comment' => $comment,
            'name' => $name,
            'email' => $email,
        ]);


        return redirect()->route('product_detail', ['product_id' => $product_id])->with('success', 'Review submitted successfully.');
    }
}
