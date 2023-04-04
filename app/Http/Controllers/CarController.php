<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CarController extends Controller
{
    public function index()
    {
        $cars=Car::get();
        return view('cars.index',compact('cars'));
    }


    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    { $request->validate([
        'car_name' => 'required|min:3|max:255',
        'plate' => 'required|max:255',
        'province' => 'required|min:3|max:255',
        'district' => 'required|min:3|max:255',
        'owner' => 'required|min:3|max:255',             
        'telephone' => 'required',
        'email' => 'required|unique:cars|max:255',
        'price' => 'required',  
        'usage'=>'required',          
        'front_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:510000',
        'side_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:510000',
   //      'view_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:510000',
   //      'view_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:510000',
     ]);
    $plot = new Car;
  
    $plot->car_name = $request->car_name;
    $plot->province = $request->province;
    $plot->plate = $request->plate;
    $plot->district = $request->district;
    $plot->owner = $request->owner;
    $plot->email = $request->email;
    $plot->telephone = $request->telephone;
    $plot->price = $request->price;
    $plot->usage = $request->usage;   
    $plot->description = $request->description;   
    if ($fimage = $request->file('front_image'))
        {
           $imageDestinationPath = 'uploads/';                        
           $Add_front_image = date('sY') . "." . $fimage->getClientOriginalExtension();
           $fimage->move($imageDestinationPath, $Add_front_image);
           $plot->front_image = $Add_front_image;
        }

        
       if ($simage = $request->file('side_image'))
       {
          $imageDestinationPath = 'uploads/';                        
          $post_SImage = date('smdH') . "." . $simage->getClientOriginalExtension();
          $simage->move($imageDestinationPath, $post_SImage);
          $plot->side_image = $post_SImage;
       }

       
       if ($_image = $request->file('view_1'))
        {
           $imageDestinationPath = 'uploads/';                        
           $post_VImage = date('sdis') . "." . $_image->getClientOriginalExtension();
           $_image->move($imageDestinationPath, $post_VImage);
           $plot->view_1 = $post_VImage;
        }

        
       if ($v_image = $request->file('view_2'))
       {
          $imageDestinationPath = 'uploads/';                        
          $_postImage = date('sHYm') . "." . $v_image->getClientOriginalExtension();
          $v_image->move($imageDestinationPath, $_postImage);
          $plot->view_2 = $_postImage;
       }
    

    $plot->save();
    return redirect()->back()->with('success','New Car deatails for '.$request->usage.''.' has added successfully');


    }

    public function show(Car $car)
    {
        //
    }


    public function edit($id)
    {
        $encId = Crypt::decrypt($id);
        $car   = Car::find($encId);  
       
        return view('cars.edit', compact('car') );
    }

    public function update(Request $request, $id)
    {
        
         $request->validate([
            'car_name' => 'required|min:3|max:255',
            'plate' => 'required',
            'province' => 'required|min:3|max:255',
            'district' => 'required|min:3|max:255',
            'owner' => 'required|min:3|max:255',             
            'telephone' => 'required',
            'email' => 'required',
            'price' => 'required',  
            'usage'=>'required',          
            'front_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:510000',
            'side_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:510000',
            // 'view_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:510000',
            // 'view_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:510000',
        ]);
        $plot = Car::find($id);
      
        $plot->car_name = $request->car_name;
        $plot->province = $request->province;
        $plot->plate = $request->plate;
        $plot->district = $request->district;
        $plot->owner = $request->owner;
        $plot->email = $request->email;
        $plot->telephone = $request->telephone;
        $plot->price = $request->price;
        $plot->usage = $request->usage;    
        $plot->description = $request->description;    
        if ($fimage = $request->file('front_image'))
        {
           $imageDestinationPath = 'uploads/';                        
           $Add_front_image = date('sY') . "." . $fimage->getClientOriginalExtension();
           $fimage->move($imageDestinationPath, $Add_front_image);
           $plot->front_image = $Add_front_image;
        }

        
       if ($simage = $request->file('side_image'))
       {
          $imageDestinationPath = 'uploads/';                        
          $post_SImage = date('smdH') . "." . $simage->getClientOriginalExtension();
          $simage->move($imageDestinationPath, $post_SImage);
          $plot->side_image = $post_SImage;
       }

       
       if ($_image = $request->file('view_1'))
        {
           $imageDestinationPath = 'uploads/';                        
           $post_VImage = date('sdis') . "." . $_image->getClientOriginalExtension();
           $_image->move($imageDestinationPath, $post_VImage);
           $plot->view_1 = $post_VImage;
        }

        
       if ($v_image = $request->file('view_2'))
       {
          $imageDestinationPath = 'uploads/';                        
          $_postImage = date('sHYm') . "." . $v_image->getClientOriginalExtension();
          $v_image->move($imageDestinationPath, $_postImage);
          $plot->view_2 = $_postImage;
       }
    
        $plot->save();
        return redirect()->route('admin-cars.index')->with('success','Car deatails for '.$request->usage.''.' has updated successfully');
    
    }

    public function destroy( $id)
    {
        $encId = Crypt::decrypt($id);
        Car::find($encId)->delete();
        return redirect()->route('admin-cars.index')->with('success',' Car detail  has deleted successfully');
    
    
    }
}
