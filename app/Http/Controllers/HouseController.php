<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HouseController extends Controller
{
    function __construct()
    {

         // house mermission middleware
         $this->middleware('permission:add-house', ['only' => ['create','store','index']]);
         $this->middleware('permission:delete-house', ['only' => ['destroy','']]);
         $this->middleware('permission:edit-house', ['only' => ['edit','update']]);
        
    }
    public function index()
    {
        $houses=House::get();
        return view('houses.index',compact('houses'));
    }


    public function create()
    {
        return view('houses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'surname' => 'required|min:3|max:255',
            'province' => 'required|min:3|max:255',
            'district' => 'required|min:3|max:255',
            'sector' => 'required|min:3|max:255',
            'cell' => 'required|min:3|max:255',
            'village' => 'required|min:3|max:255',
            'nearest_road' => 'required',
            'nearest_city'=>'required',
            'bedroom' => 'required',
            'bathroom'=>'required',
            'salon'=>'required',
            'telephone' => 'required',
            'email' => 'required',
            'price' => 'required',  
            'housing_type'=>'required',          
            'front_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'side_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'view_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'view_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $plot = new House;
        $plot->name = $request->name;
        $plot->surname = $request->surname;
        $plot->province = $request->province;       
        $plot->district = $request->district;
        $plot->sector = $request->sector;
        $plot->cell = $request->cell;
        $plot->village = $request->village;
        $plot->bedroom = $request->bedroom;
        $plot->bathroom = $request->bathroom;
        $plot->salon = $request->salon;
        $plot->nearest_road = $request->nearest_road;
        $plot->nearest_city = $request->nearest_city;
        $plot->housing_type = $request->housing_type;       
        $plot->telephone = $request->telephone;
        $plot->email = $request->email;
        $plot->price = $request->price; 

        if ($fimage = $request->file('front_image'))
         {
            $imageDestinationPath = 'uploads/';                        
            $Add_front_image = date('YmdHis') . "." . $fimage->getClientOriginalExtension();
            $fimage->move($imageDestinationPath, $Add_front_image);
            $plot->front_image = $Add_front_image;
         }

         
        if ($simage = $request->file('side_image'))
        {
           $imageDestinationPath = 'uploads/';                        
           $post_SImage = date('YmdHis') . "." . $simage->getClientOriginalExtension();
           $simage->move($imageDestinationPath, $post_SImage);
           $plot->side_image = $post_SImage;
        }

        
        if ($_image = $request->file('view_1'))
         {
            $imageDestinationPath = 'uploads/';                        
            $post_VImage = date('YmdHis') . "." . $_image->getClientOriginalExtension();
            $_image->move($imageDestinationPath, $post_VImage);
            $plot->view_1 = $post_VImage;
         }

         
        if ($v_image = $request->file('view_2'))
        {
           $imageDestinationPath = 'uploads/';                        
           $_postImage = date('YmdHis') . "." . $v_image->getClientOriginalExtension();
           $v_image->move($imageDestinationPath, $_postImage);
           $plot->view_2 = $_postImage;
        }
  
        $plot->save();
        return redirect()->back()->with('success','New House for '.$request->housing_type.''.' has added successfully');
    

    }

    public function show(House $house)
    {
        //
    }

    public function edit($id)
    {
        $encId = Crypt::decrypt($id);
        $house   = House::find($encId);  
       
        return view('houses.edit', compact('house') );
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'surname' => 'required|min:3|max:255',
            'province' => 'required|min:3|max:255',
            'district' => 'required|min:3|max:255',
            'sector' => 'required|min:3|max:255',
            'cell' => 'required|min:3|max:255',
            'village' => 'required|min:3|max:255',
            'nearest_road' => 'required',
            'nearest_city'=>'required',
            'bedroom' => 'required',
            'bathroom'=>'required',
            'salon'=>'required',
            'telephone' => 'required',
            'email' => 'required',
            'price' => 'required',  
            'housing_type'=>'required',          
            'front_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'side_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'view_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'view_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $plot = House::find($id);
        $plot->name = $request->name;
        $plot->surname = $request->surname;
        $plot->province = $request->province;
        $plot->surname = $request->surname;
        $plot->district = $request->district;
        $plot->sector = $request->sector;
        $plot->cell = $request->cell;
        $plot->village = $request->village;
        $plot->bedroom = $request->bedroom;
        $plot->bathroom = $request->bathroom;
        $plot->salon = $request->salon;
        $plot->nearest_road = $request->nearest_road;
        $plot->nearest_city = $request->nearest_city;
        $plot->housing_type = $request->housing_type;       
        $plot->telephone = $request->telephone;
        $plot->email = $request->email;
        $plot->price = $request->price; 

        if ($fimage = $request->file('front_image'))
         {
            $imageDestinationPath = 'uploads/';                        
            $Add_front_image = date('YmdHis') . "." . $fimage->getClientOriginalExtension();
            $fimage->move($imageDestinationPath, $Add_front_image);
            $plot->front_image = $Add_front_image;
         }
         
        if ($simage = $request->file('side_image'))
        {
           $imageDestinationPath = 'uploads/';                        
           $post_SImage = date('YmdHis') . "." . $simage->getClientOriginalExtension();
           $simage->move($imageDestinationPath, $post_SImage);
           $plot->side_image = $post_SImage;
        }
        
        if ($_image = $request->file('view_1'))
         {
            $imageDestinationPath = 'uploads/';                        
            $post_VImage = date('YmdHis') . "." . $_image->getClientOriginalExtension();
            $_image->move($imageDestinationPath, $post_VImage);
            $plot->view_1 = $post_VImage;
         }

         
        if ($v_image = $request->file('view_2'))
        {
           $imageDestinationPath = 'uploads/';                        
           $_postImage = date('YmdHis') . "." . $v_image->getClientOriginalExtension();
           $v_image->move($imageDestinationPath, $_postImage);
           $plot->view_2 = $_postImage;
        }
  
        $plot->save();
        return redirect()->route('admin-houses.index')->with('success',' House detail for '.$request->housing_type.''.' has updated successfully');
    
    }

    public function destroy( $id)
    {
        $encId = Crypt::decrypt($id);
        House::find($encId)->delete();
        return redirect()->route('admin-houses.index')->with('success',' House detail  has deleted successfully');
    
    
    }
}
