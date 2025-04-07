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


    public function UpdateAboutUs(Request $request){

        $about_id = $request->id;
        $about = About::find($about_id);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(526,550)->save(public_path('upload/about/'.$name_gen));
            $save_url = 'upload/about/'.$name_gen;

            if (file_exists(public_path($about->image ))) {
                @unlink(public_path($about->image ));
            }
            
            About::find($about_id)->update([
                'title' => $request->title,
                'description' => $request->description, 
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'About Updated With image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            About::find($about_id)->update([
                'title' => $request->title,
                'description' => $request->description, 
            ]);

            $notification = array(
                'message' => 'About Updated Without image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }
    // End Method 



}
