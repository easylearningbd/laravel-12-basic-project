<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider; 
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Title;
 
class SliderController extends Controller
{
    public function GetSlider(){
        $slider = Slider::find(1);
        return view('admin.backend.slider.get_slider',compact('slider')); 
    } 
    // End Method 

    public function UpdateSlider(Request $request){

        $slider_id = $request->id;
        $slider = Slider::find($slider_id);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(306,618)->save(public_path('upload/slider/'.$name_gen));
            $save_url = 'upload/slider/'.$name_gen;

            if (file_exists(public_path($slider->image ))) {
                @unlink(public_path($slider->image ));
            }
            
            Slider::find($slider_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Slider Updated With image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            Slider::find($slider_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link, 
            ]);

            $notification = array(
                'message' => 'Slider Updated Without image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }
    // End Method 

    public function EditSlider(Request $request, $id){

        $slider = Slider::findOrFail($id);

        if ($request->has('title')) {
            $slider->title = $request->title;
        }
        if ($request->has('description')) {
            $slider->description = $request->description;
        }

        $slider->save();
        return response()->json(['success' => true]);

    }
     // End Method 

     public function EditFeatures(Request $request, $id){

        $title = Title::findOrFail($id);

        if ($request->has('features')) {
            $title->features = $request->features;
        } 
        $title->save();
        return response()->json(['success' => true]);

    }
     // End Method 

     public function EditReview(Request $request, $id){

        $title = Title::findOrFail($id);

        if ($request->has('reviews')) {
            $title->reviews = $request->reviews;
        } 
        $title->save();
        return response()->json(['success' => true]);

    }
     // End Method 

     public function EditAnswers(Request $request, $id){

        $title = Title::findOrFail($id);

        if ($request->has('answers')) {
            $title->answers = $request->answers;
        } 
        $title->save();
        return response()->json(['success' => true]);

    }
     // End Method 



}
