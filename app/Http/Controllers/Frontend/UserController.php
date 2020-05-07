<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class UserController extends Controller
{
    public function index(){
        $posts = Post::where('status', '=', 1)->paginate(5);
        return view('Frontend.index', ['posts' => $posts]);
    }

    

    public function post($slug){
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('Frontend.post', ['post' => $post]);
    }
}
