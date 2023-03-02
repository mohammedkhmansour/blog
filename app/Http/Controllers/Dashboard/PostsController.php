<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function Pest\Laravel\post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(15);
        $author = Auth::user();
        return view('dashboard.posts.index',compact('posts','author'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->rouls($request);
        $data = $request->except('image');

        if($request->hasFile('image')){
         $file = $request->file('image');
         if($file->isValid()){
             $data['image']  = $file->store('posts',['disk'=>'public']);
         }
        }
             $data['slug']  = Str::slug($request->post('name'));

         $posts = Post::create($data);

         flash()->addSuccess('تم الاضافة بنجاح');


         return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->rouls($request);

        $post = Post::findOrFail($id);

        $data = $request->except('image');
        $data['slug']  = Str::slug($request->post('name'));

        $old_image = $post->image;

        // $new_image = $this->uploadeImage($request);
        if($request->hasFile('image')){
            $file = $request->file('image');
            if($file->isValid()){
                $data['image']  = $file->store('posts',['disk'=>'public']);
            }
           }


        $post->update($data);

        if($old_image && $old_image != $post->image){
            Storage::disk('public')->delete($old_image);
        }

        flash()->addInfo('تم الاضافة بنجاح');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        flash()->addError('تم الحذف بنجاح');

        return redirect()->route('posts.index');
    }

    public function rouls(Request $request){
        $request->validate([
            'name'  => "required",
            'image' => "image",

           ]);

     }

}
