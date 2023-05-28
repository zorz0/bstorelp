<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SliderImage;
class slider extends Controller
{
    public function index(){
        return view('admin.slider');
    }

    public function add(Request $request){

        if ($request->hasfile('sliderimage')) {

            foreach ($request->file('sliderimage') as $file) {
                $filename = $file->getClientOriginalName();
                $file->storeAs('public/slider_images', $filename); // Store the file in the specified storage directory
                
                $sliderImage = new SliderImage();
                $sliderImage->image = $filename;
                $sliderImage->save(); // Save the image details to the database

            }
            return redirect()->back()->with('success', 'Images uploaded successfully .');

        }


    }
    }

