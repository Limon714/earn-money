<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function home(){
        if(Auth::id()){
            $post = Post::where('post_status','=','Active')->get();
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
        $post = Post::where('post_status','=','Active')->get();
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

    public function mypost(){
        $user = Auth()->user();
        $user_id = $user->id;
        $post = Post::where('user_id','=',$user_id)->get();
        return view('home.mypost',compact('post'));
    }

    public function my_post_delete($id){
        $post = Post::find($id);
        $post->delete();

        Alert::warning('Delete','Post Delete Permanently');

        return redirect()->back();
    }

    // Edit My Post View

    public function my_post_edit($id){
        $post = Post::find($id);
       
        return view('home.my_edit_post',compact('post'));

    }

    public function my_post_update(Request $request,$id)
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
        Alert::success('Success','Post Update Permanently');
        return redirect('/my_post')->with('message','Update successful');
    }
}
