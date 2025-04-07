<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\About;

class FrontendController extends Controller
{
    public function OurTeam(){
        return view('home.team.team_page');
    } 
    /// End Method 

    public function AboutUs(){
        return view('home.about.about_us');
    } 
    /// End Method

    public function GetAboutUs(){
        $about = About::find(1);
        return view('admin.backend.about.get_about',compact('about')); 
    }
    /// End Method



}
