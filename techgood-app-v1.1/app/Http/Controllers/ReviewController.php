<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function listReviews()
    {
        $reviews = Review::all();
        return view('auth.product_detail', ['reviews' => $reviews]);
    }
}
