<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PlotController extends Controller
{
    function __construct()
    {

         // plot mermission middleware
         $this->middleware('permission:add-plot', ['only' => ['create','store','index']]);
         $this->middleware('permission:delete-plot', ['only' => ['destroy','']]);
         $this->middleware('permission:edit-plot', ['only' => ['edit','update']]);
        
    }
 
    public function index()
    {
        $plots=Plot::get();
        return view('plots.index',compact('plots'));
    }
    public function create()
    {
        return view('plots.create');
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
            'width' => 'required',
            'length' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'price' => 'required',            
            'front_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'side_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'view_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'view_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $plot = new plot;
        $plot->name = $request->name;
        $plot->surname = $request->surname;
        $plot->province = $request->province;
        $plot->surname = $request->surname;
        $plot->district = $request->district;
        $plot->sector = $request->sector;
        $plot->cell = $request->cell;
        $plot->village = $request->village;
        $plot->width = $request->width;
        $plot->length = $request->length;
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
        return redirect()->back()->with('success','New plot has added successfully');
    }

  
    public function show(Plot $plot)
    {
        //
    }

   
    public function edit($id)
    {
        $encId = Crypt::decrypt($id);
        $plot   = Plot::find($encId);
      
       
        return view('plots.edit', compact('plot') );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'surname' => 'required|min:3|max:255',
            'province' => 'required|min:3|max:255',
            'district' => 'required|min:3|max:255',
            'sector' => 'required|min:3|max:255',
            'cell' => 'required|min:3|max:255',
            'village' => 'required|min:3|max:255',
            'width' => 'required',
            'length' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'price' => 'required',            
            // 'front_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'side_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'view_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'view_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
         
        $plot =plot::find($id);
        $plot->name = $request->name;
        $plot->surname = $request->surname;
        $plot->province = $request->province;
        $plot->surname = $request->surname;
        $plot->district = $request->district;
        $plot->sector = $request->sector;
        $plot->cell = $request->cell;
        $plot->village = $request->village;
        $plot->width = $request->width;
        $plot->length = $request->length;
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
        return redirect()->route('admin-plots.index')->with('success','New plot has added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plot $plot)
    {
        //
    }
}
