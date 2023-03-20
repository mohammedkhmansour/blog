<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showHome()
    {
        return view('front.contact');
    }

    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('dashboard.contact.index',compact('contacts'));
    }

    public function store(Request $request)
    {
        $this->rouls($request);


        $contacts = Contact::create($request->all());
        flash()->addSuccess('تم الارسال بنجاح');
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $contacts = Contact::findOrFail($id)->delete();
        flash()->addError('تم الحذف بنجاح');
        return redirect()->back();

    }

    public function rouls(Request $request){
        $request->validate([
            'firstn'  => "required|min:3|max:255",
            'email'  => "email",
           ]
           ,
           [
           'firstn.required'  => 'هاد الحقل مطلوب',
           'firstn.min:3'    => 'يجب ان لا يقل عن 3 احرف',
           'firstn.max:255'  => 'يجب ان لا يزيد عن 255 حرف',
           'email.email'    => 'يجب ان يكون بريد',

        ]);

     }
}
