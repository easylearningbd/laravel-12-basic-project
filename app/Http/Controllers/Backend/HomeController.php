<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Clarifi;
use App\Models\Usability;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeController extends Controller
{
    public function AllFeature(){
        $feature = Feature::latest()->get();
        return view('admin.backend.feature.all_feature', compact('feature'));
    }
    // End Method 
    public function AddFeature(){ 
        return view('admin.backend.feature.add_feature');
    }
    // End Method 

    public function StoreFeature(Request $request){ 
    
        Feature::create([
                'title' => $request->title,
                'icon' => $request->icon,
                'description' => $request->description, 
            ]);
        

        $notification = array(
            'message' => 'Feature Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.feature')->with($notification); 
    }
    // End Method 

    public function EditFeature($id){
        $feature = Feature::find($id);
        return view('admin.backend.feature.edit_feature',compact('feature'));

    } 
    // End Method 

    public function UpdateFeature(Request $request){ 
        $fea_id  = $request->id;

        Feature::find($fea_id)->update([
                'title' => $request->title,
                'icon' => $request->icon,
                'description' => $request->description, 
            ]);
        

        $notification = array(
            'message' => 'Feature Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.feature')->with($notification); 
    }
    // End Method 

    public function DeleteFeature($id){
        Feature::find($id)->delete();

        $notification = array(
            'message' => 'Feature Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }
    // End Method 


    public function GetClarifies(){
        $clarifi = Clarifi::find(1);
        return view('admin.backend.clarifi.get_clarifi',compact('clarifi')); 
    } 
    // End Method 

    public function UpdateClarifies(Request $request){

        $clar_id = $request->id;
        $clarifi = Clarifi::find($clar_id);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(302,618)->save(public_path('upload/clarifi/'.$name_gen));
            $save_url = 'upload/clarifi/'.$name_gen;

            if (file_exists(public_path($clarifi->image ))) {
                @unlink(public_path($clarifi->image ));
            }
            
            Clarifi::find($clar_id)->update([
                'title' => $request->title,
                'description' => $request->description, 
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Clarifi Updated With image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            Clarifi::find($clar_id)->update([
                'title' => $request->title,
                'description' => $request->description, 
            ]);

            $notification = array(
                'message' => 'Clarifi Updated Without image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }
    // End Method 

    public function GetUsability(){
        $usability = Usability::find(1);
        return view('admin.backend.usability.get_usability',compact('usability')); 
    } 
    // End Method 

    public function UpdateUsability(Request $request){

        $usabi_id = $request->id;
        $usability = Usability::find($usabi_id);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(560,400)->save(public_path('upload/usability/'.$name_gen));
            $save_url = 'upload/usability/'.$name_gen;

            if (file_exists(public_path($usability->image ))) {
                @unlink(public_path($usability->image ));
            }
            
            Usability::find($usabi_id)->update([
                'title' => $request->title,
                'description' => $request->description, 
                'youtube' => $request->youtube,
                'link' => $request->link,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Usability Updated With image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            Usability::find($usabi_id)->update([
                'title' => $request->title,
                'description' => $request->description, 
                'youtube' => $request->youtube,
                'link' => $request->link, 
            ]);

            $notification = array(
                'message' => 'Usability Updated Without image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }
    // End Method 



}
