@extends('layouts.admin.master')
@section('content')

    <a href="" class="btn-dark px-2 py-2 mx-2" >{{ 'اضق مقال جديد' }}</a>
<br>
<br>
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>الاسم</th>
            <th>التصنيف</th>
            <th>وصف قصير</th>
            <th>صورة المقال</th>
            <th>الكاتب</th>
            <th>عدد الزيارات</th>
            <th>عمليات</th>

        </tr>
    </thead>
    <tbody>

        {{-- @foreach ($categories as $category) --}}


        <td>1</td>
        <td>{{''}}</td>
        <td>{{''}}</td>
        <td>1</td>
        <td>{{''}}</td>
        <td>{{''}}</td>
        <td>{{''}}</td>

        <td>
            <a href=""  class="btn btn-info btn-sm"
                 title="{{ 'تعديل' }}"><i
                    class="fa fa-edit"></i></a>
            <a href="" class="btn btn-danger btn-sm"
                 title="{{ 'حذف' }}"><i
                    class="fa fa-trash"></i></a>
        </td>
        </tr>

        {{-- @endforeach --}}
    </tbody>
</table>

@endsection
