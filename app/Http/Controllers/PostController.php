<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index():View
    {
        $posts = Post::where('active', true)
        ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
        ->select('posts.*', 'categories.title as category_title') 
        ->orderBy('posts.id', 'desc') 
        ->paginate(10);

        return view('posts',compact('posts'));
    }

    public function show(Post $post, string $slug=null):View
    {
        $post->load('category');
        $next = Post::where('active', true)->where('id','>',$post->id)->first();
        $prev = Post::where('active', true)->where('id','<',$post->id)->orderBy('id','desc')->first();
        if(is_null($next)){
            $next = Post::where('active',true)->first();
        }
        if(is_null($prev)){
            $prev = Post::where('active',true)->latest()->first();
        }
        $jumlahpost = Post::count();

        return view("posts-detail", compact('post','next','prev','jumlahpost'));
    }
}
