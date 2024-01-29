<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function home(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype == 'user'){
                return view('home.homepage');
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
        return view('home.homepage');
    }
}
