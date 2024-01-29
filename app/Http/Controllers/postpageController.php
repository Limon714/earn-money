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


}
