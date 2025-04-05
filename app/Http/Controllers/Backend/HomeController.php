<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;

class HomeController extends Controller
{
    public function AllFeature(){
        $feature = Feature::latest()->get();
        return view('admin.backend.feature.all_feature', compact('feature'));
    }
    // End Method 
}
