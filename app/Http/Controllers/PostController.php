<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::get();
        return view('post.index',compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'detail' => 'required|min:10|max:255',
            'status' => 'required',
            'image' => 'required',
        ]);
        $plot =new Post;
        $plot->title = $request->title;
        $plot->detail = $request->detail;
        $plot->status = $request->status;
        if ($fimage = $request->file('image'))
        {
           $imageDestinationPath = 'uploads/';                        
           $Add_front_image = date('YmdHis') . "." . $fimage->getClientOriginalExtension();
           $fimage->move($imageDestinationPath, $Add_front_image);
           $plot->image = $Add_front_image;
        }
        $plot->save();
        return redirect()->back()->with('success',''.$request->title.' Content has added successfully');
    
    }

   
    public function show(Post $post)
    {
        //
    }

   
    public function edit(Post $post)
    {
        //
    }

   
    public function update(Request $request, Post $post)
    {
        $plot =Post::find($id);
        $plot->title = $request->title;
        $plot->detail = $request->detail;
        $plot->status = $request->status;
        if ($fimage = $request->file('image'))
        {
           $imageDestinationPath = 'uploads/';                        
           $Add_front_image = date('YmdHis') . "." . $fimage->getClientOriginalExtension();
           $fimage->move($imageDestinationPath, $Add_front_image);
           $plot->image = $Add_front_image;
        }
        $plot->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
