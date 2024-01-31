<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function home(){
        if(Auth::id()){
            $post = Post::all();
            $usertype = Auth()->user()->usertype;
            if($usertype == 'user'){
                return view('home.homepage',compact('post'));
            }
            else if($usertype == 'admin'){
                return view('admin.Admin');
            }
            else{
                return redirect()->back();
            }
        }
        
    }

    // public function post(){
    //     return view('post');
    // }

    public function homepage(){
        $post = Post::all();
        return view('home.homepage',compact('post'));
    }

    public function postdetails($id){
        $post = Post::find($id);
        return view('home.post_details',compact('post'));
    }
    public function newpost(){
        return view('admin.newpost');
    }

    public function user_add_post(Request $request){
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
        return redirect('/home')->with('message', 'New post added successfully');

    }
}
