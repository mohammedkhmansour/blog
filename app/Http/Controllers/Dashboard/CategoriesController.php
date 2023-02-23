<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('dashboard.categories.index',[
            'categories'  => $categories,
            'parents'     => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->rouls($request);
        $request->merge([
            'slug'  => Str::slug($request->post('name')),
        ]);

        $categories = Category::create($request->all());
        flash()->addSuccess('تم الاضافة بنجاح');
        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function rouls(Request $request){
        $request->validate([
            'name'  => "required|min:3|max:255|",
            'slug'  => "unique:categories",
            'parent_id' => [
                'int','nullable','exists:categories,id'
            ],
           ]
           ,
           [
           'name.required'  => 'هاد الحقل مطلوب',
           'name.min:3'    => 'يجب ان لا يقل عن 3 احرف',
           'name.max:255'  => 'يجب ان لا يزيد عن 255 حرف',

        ]);

     }
}
