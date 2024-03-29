<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->limit(6)->get();
        $postsOffset = Post::with('category')->latest()->limit(6)->offset(6)->get();
        $featuredPosts = Post::with('category')->inRandomOrder()->limit(3)->get();
        $topStories = Post::with('category')->orderBy('views','DESC')->limit(2)->get();
        $topStoriesOffest = Post::with('category')->orderBy('views','DESC')->limit(3)->offset(2)->get();
        $editors = User::with('posts')->get();
        // $editors = Post::with('user')->get();


        return view('front.index',compact('posts','featuredPosts','topStories','topStoriesOffest','postsOffset','editors'));
    }

    // public function show(Category $category , Post $post)
    // {
    //     return view('front.blog-details',compact('category','post'));
    // }

    public function show(Post $post)
    {

        // $tags = implode(', ', $post->tags()->pluck('name')->toArray());
        /**  تم النقل الى الكومبوننت
         *      $tags = Tag::all();
        *$categories = Category::get();
        *$recents = Post::latest()->limit(5)->get();
        */



        // $post_categories_ids = Post::with('category')->pluck('id');

        // $postrelateds = Post::whereHas('category',function($cat) use($post_categories_ids){
        //     $cat->whereIn('category_id',$post_categories_ids);
        // })->limit(2)->latest()->get(); // هاد فعالة ويلي تحت فعالة

            $category = $post->category;
            $postrelateds = $category->posts()->where('id','!=',$post->id)->latest()->take(2)->get();

            $next = Post::where('id','>',$post->id)->min('id');
            $prev = Post::where('id','<',$post->id)->max('id');
            $next_post = Post::find($next);
            $prev_post = Post::find($prev);
            $comments = Comment::where('approved',1)->where('post_id',$post->id)->latest()->limit(5)->get();

            event('post.views',$post);

        return view('front.blog-details',compact('post','postrelateds','next_post','prev_post','comments'));

    }
    public function search(Request $request)
    {

        $search = $request->query('search');

        $posts = Post::where('name','LIKE',"%$search%")->get();

        return view('front.search',compact('posts'));

    }

    public function authorPosts($id)
    {
        $posts = Post::where('user_id',$id)->latest()->paginate(5);
        return view('front.author',compact('posts'));
    }

    public function categoryPosts($id)
    {
        $posts = Post::where('category_id',$id)->latest()->paginate(5);
        return view('front.category-posts',compact('posts'));
    }
}
