<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
    public function create()
    {
        
        return view('posts.create');
        
    }
    public function edit(Post $post)
    {
        return view('posts.edit',['post' =>$post]);
    }
}
