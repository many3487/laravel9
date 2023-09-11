<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index()
    {
        
        return view('posts.index',[
            'posts'=> Post::latest()-> paginate()
        ]);
        
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back();
        
    }

    public function create(Post $post)
    {
        return view('posts.create',['post' => $post]);//se pasa un elemento
    }

    public function store(Request $request)
    {
        $post = $request->user()->posts()->create([
            'title' => $title = $request -> title, 
            'slug' => Str::slug($title), 
            'body' => $request -> body, 
        ]);

        return redirect() -> route('posts.edit',$post);//se pasa un elemento
    }
    
    public function update(Request $request, Post $post)
    {
    
        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit',['post' =>$post]);
    }
}
