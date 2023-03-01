@extends('layouts.admin.master')
@section('content')

<form action="{{''}}" method="post" class="my-3" enctype="multipart/form-data">
    <div class="row mx-2">
        <div class="form-group col-md-6">
            <label for=""> عنوان المقال</label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}">
        </div>

        <div class="form-group col-md-6">
            <label for="">التصنيف</label>
            <select name="category_id" class="form-control form-select">
                <option value="">اختر التصنيف</option>
                {{-- @foreach($categories as $category) --}}
                <option value="">{{''}}</option>
                {{-- @endforeach --}}
            </select>
            @error('category_id')
            <div class="text-danger">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="form-group col-md-12">
            <label for="">الوصف</label>

            <textarea class="textarea" placeholder="Place some text here"
            style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

            @error('description')
            <div class="text-danger">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="">التاج</label>
        <input type="text" name="tag" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="">صورة</label>
            <input type="file" name="image" class="form-control" id="image">
            <img id="showImage"  src="{{url('no_image.jpg') }}"  style="width:100px; height: 100px;">
        </div>

    </div>
    <button type="submit" class="btn btn-primary col-md-6 mx-3">حفظ</button>

</form>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>

<script>
    var inputElm = document.querySelector('[name=tag]'),
    tagify = new Tagify (inputElm);

</script>
@endpush


@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
       $('#image').change(function(e) {
           var reader = new FileReader();
           reader.onload = function(e) {
              $('#showImage').attr('src', e.target.result);
           }
           reader.readAsDataURL(e.target.files['0']);
       });
    });
 </script>

@endpush
