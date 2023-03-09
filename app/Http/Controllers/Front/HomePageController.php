<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->limit(5)->get();
        return view('front.index',compact('posts'));
    }

    // public function show(Category $category , Post $post)
    // {
    //     return view('front.blog-details',compact('category','post'));
    // }

    public function show(Post $post)
    {

        // $tags = implode(', ', $post->tags()->pluck('name')->toArray());
        return view('front.blog-details',compact('post'));

    }
}
