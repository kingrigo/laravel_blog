<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Post;
class CrudController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('crud.create');
    }
    public function store(Request $request){
        $post = Post::create($request->all());

        if (Auth::check()){
            $username = Auth::user()->name;
        }else{ $username = 'gay';}
        $path = Storage::disk('public')->put('image', $request->img);
        $post->fill(['img'=> asset($path)])->save();
        $post->fill(['author' => $username])->save();
        return redirect('blog');
    }
    public function destroy($id){
        $post = Post::where('id', $id)->delete();
        return redirect('blog');
    }
    public function update(Request $request, $id){
        $post = Post::where('id', $id)->first();
        $post->fill($request->all())->save();

        
        $path = Storage::disk('public')->put('image', $request->img);
        $post->fill(['img'=> asset($path) ])->save();

        return redirect('blog');
    }
    public function edit($id){
        $post = Post::where('id', $id)->first();
        return view('crud.update', compact('post'));
    }
}
