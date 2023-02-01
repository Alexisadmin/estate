<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
        $post =new Post;
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->status = $request->status;
        if ($fimage = $request->file('image'))
        {
           $imageDestinationPath = 'uploads/';                        
           $Add_front_image = date('YmdHis') . "." . $fimage->getClientOriginalExtension();
           $fimage->move($imageDestinationPath, $Add_front_image);
           $post->image = $Add_front_image;
        }
        $post->save();
        return redirect()->back()->with('success',''.$request->title.' Content has added successfully');
    
    }

   
    public function show(Post $post)
    {
        //
    }

   
    public function edit($id)
    {  $encry = Crypt::decrypt($id);
       $post=Post::find($encry);
       return view('post.edit',compact('post'));
    }

   
    public function update(Request $request,$id)
    {
        $post =Post::find($id);
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->status = $request->status;
        if ($fimage = $request->file('image'))
        {
           $imageDestinationPath = 'uploads/';                        
           $Add_front_image = date('YmdHis') . "." . $fimage->getClientOriginalExtension();
           $fimage->move($imageDestinationPath, $Add_front_image);
           $post->image = $Add_front_image;
        }
        $post->save();
        return redirect()->route('posts.index')->with('success',''.$request->title.' Content has updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encId = Crypt::decrypt($id);
        Post::find($encId)->delete();
        return redirect()->route('posts.index')->with('success',' posts  has deleted successfully');
    
    }
}
