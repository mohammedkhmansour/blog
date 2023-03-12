<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CommentsController extends Controller
{
    // public function showcComments()
    // {
    //     $comments = Comment::where('approved',1)->latest()->limit(5)->get();
    //     return view('front.blog-details',compact('comments'));
    // }
    public function store(Request $request)
    {
        $request->merge([
            'post_id'  => $request->post('post_id'),
        ]);


        $comments = Comment::create($request->all());
        flash()->addSuccess('تم الاضافة بنجاح');
        return redirect()->back();
    }
}
