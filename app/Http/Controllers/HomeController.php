<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\adopt;
use App\Models\Post;
use App\Models\Vet;

class HomeController extends Controller
{
    public function index(){
        return view('home.userpage');
    }

    public function logout(){
        return view('home.home');
    }
    public function register(){
        return view('auth.register');
    }

    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.home');
        }
        else{
            return view('home.userpage');
        }
    }

    public function adoption(){
        $data=adopt:: all();
        return view('home.adoption', compact('data'));
    }

    public function description(){
        return view('home.description');
    }
    public function blog()
    {
        $post = Post::all();
        return view('home.blog',compact('post'));
    }
    public function vethome()
    {
        $post = Vet::all();
        return view('home.vethome',compact('post'));
    }
}
