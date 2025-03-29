<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ReviewController extends Controller
{
    public function AllReview(){
        $review = Review::latest()->get();
        return view('admin.backend.review.all_review', compact('review'));
    }
    // End Method 

    public function AddReview(){
        return view('admin.backend.review.add_review');
    }
    // End Method 



} 
