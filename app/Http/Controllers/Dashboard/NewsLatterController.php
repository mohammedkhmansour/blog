<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NewsLatter;
use Illuminate\Http\Request;

class NewsLatterController extends Controller
{
    public function index()
    {
        $newslatters = NewsLatter::latest()->paginate(10);
        return view('dashboard.newslatters.index',compact('newslatters'));
        // return NewsLatter::latest()->paginate(10);

    }

    public function store(Request $request)
    {

       $newslatter = NewsLatter::create($request->all());
       flash()->addSuccess('تم الارسال بنجاح');
       return redirect()->back();
    }

    public function destroy(string $id)
    {
        $NewsLatter = NewsLatter::findOrFail($id)->delete();
        flash()->addError('تم الحذف بنجاح');
        return redirect()->back();

    }
}
