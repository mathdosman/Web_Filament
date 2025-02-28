<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category, string $slug = null):View
    {
        $posts = Post::where('active',true)
        ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
        ->select('posts.*', 'categories.title as category_title')
        ->where('category_id',$category->id)
        ->orderBy('id','desc')
        ->paginate(10);

        return view('posts',compact('posts'));
    }
}
