<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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
        $tags = Tag::all();
        $categories = Category::get();
        $recents = Post::latest()->limit(5)->get();


        // $post_categories_ids = Post::with('category')->pluck('id');

        // $postrelateds = Post::whereHas('category',function($cat) use($post_categories_ids){
        //     $cat->whereIn('category_id',$post_categories_ids);
        // })->limit(2)->latest()->get(); // هاد فعالة ويلي تحت فعالة

            $category = $post->category;
            $postrelateds = $category->posts()->where('id','!=',$post->id)->latest()->take(2)->get();
        return view('front.blog-details',compact('post','categories','tags','recents','postrelateds'));

    }
    public function search(Request $request)
    {

        $search = $request->query('search');

        $posts = Post::where('name','LIKE',"%$search%")->get();

        return view('front.search',compact('posts'));

    }
}
