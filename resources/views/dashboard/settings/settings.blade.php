@extends('layouts.admin.master')
@section('content')

<x-error-alert />

<form action="{{route('settings.update')}}" method="post" class="my-3" enctype="multipart/form-data">
    @csrf
    @method('patch')

     <div class="row mx-2">
         <div class="form-group col-md-12">
             <label for=""> اسم الموقع</label>
         <input type="text" name="settings[app_name]" value="{{$settings['app.name']}}" class="form-control" value="{{old('app_name')}}">
         {{-- value="{{$settings['app.name']}}" لو بدي اجيب البيانات المخزنة بدون م اجيبها من الكاش --}}
         </div>
     </div>

<hr>

<h4 class="mx-2">روابط سوشيال ميديا</h4>

<div class="row mx-2">
    <div class="form-group col-md-6">
        <label for="">تويتر</label>
    <input type="text" name="settings[app_twit]" class="form-control" value="{{old('settings[app_twit]')}}">
    </div>
    <div class="form-group col-md-6">
        <label for="">فيس بوك</label>
    <input type="text" name="settings[app_fac]" class="form-control" value="{{old('settings[app_fac]')}}">
    </div>
    <div class="form-group col-md-6">
        <label for="">الانستغرام</label>
    <input type="text" name="settings[app_insta]" class="form-control" value="{{old('settings[app_insta]')}}">
    </div>
    <div class="form-group col-md-6">
        <label for=""> البريد الالكتروني</label>
    <input type="text" name="settings[app_email]" class="form-control" value="{{old('settings[app_email]')}}">
    </div>
    <div class="form-group col-md-6">
        <label for="">رقم الهاتف</label>
    <input type="text" name="settings[app_phone]" class="form-control" value="{{old('settings[app_phone]')}}">
    </div>
    <div class="form-group col-md-6">
        <label for="">العنوان</label>
    <input type="text" name="settings[app_address]" class="form-control" value="{{old('settings[app_address]')}}">
    </div>
</div>

<button type="submit" class="btn btn-primary col-md-2 mx-2">حفظ</button>

</form>

@endsection
