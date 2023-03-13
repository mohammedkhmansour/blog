<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $tags;
    public $categories;
    public $recents;

    public function __construct()
    {
       $this->tags =  Tag::all();
        $this->categories = Category::get();
        $this->recents = Post::latest()->limit(5)->get();

    }
    public function search(Request $request)
    {

        $search = $request->query('search');

        $posts = Post::where('name','LIKE',"%$search%")->get();

        return view('front.search',compact('posts'));

    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
