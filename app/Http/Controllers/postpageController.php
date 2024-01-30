<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postpageController extends Controller
{
    public function postpage(){
        return view('admin.create_post');
    }
    public function add_post(Request $request)
    {
        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'Active';
        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype= $usertype;
        $image = $request->image;
        if($image){
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postImage',$imageName);
        $post->image = $imageName;
        }
        $post->save();
        return redirect()->back()->with('message','Post added successfully');
    }
    public function show_post(){
        $post = Post::all();
        return view('admin.show_post',compact('post'));
    }

    public function delete_post($id){
      $post = Post::find($id);
      $post->delete();

    
      return redirect()->back()->with('message',"Post deleted successful");
    }
    
    public function edit_post($id){
      $post = Post::find($id);
      return view('admin.edit_post',compact('post'));

    }

    public function update_post(Request $request,$id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;

        $image = $request->image;
        if($image){
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postImage',$imageName);
        $post->image = $imageName;
        }

        $post->save();
        return redirect('/showpost')->with('message','Update successful');

    }



}
