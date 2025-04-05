<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Clarifi;

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



}
