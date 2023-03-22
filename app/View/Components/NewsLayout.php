<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsLayout extends Component
{
    public $posts;
    public function __construct()
    {
        $this->posts = Post::latest()->limit(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('front.home');
    }
}
