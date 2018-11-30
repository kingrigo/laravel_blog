<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin(){
        $posts = Post::orderBy('id', 'DESC')->paginate(50);
        return view('admin', compact('posts'));
    }
    public function aprove($id){
        $post = Post::find($id);
        $post->fill(['aproved' => true])->save();
        return redirect('blog');
    }
}
