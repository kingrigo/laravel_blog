<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class PageController extends Controller
{
    public function blog(){
        $posts = Post::orderBy('id', 'DESC')->paginate(3);
        return view('web.posts', compact('posts'));
    }

    public function post($id){
        $post = Post::where('id', $id)->first();
        return view('web.post', compact('post'));
    }

    public function landing(){
        return view('web.landing');
    }
}
