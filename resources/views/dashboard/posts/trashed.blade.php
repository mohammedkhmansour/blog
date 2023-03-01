@extends('layouts.admin.master')
@section('content')
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
                 title="{{ 'استرجاع' }}"><i
                    class="fa fa-edit"></i></a>
                    {{-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#delete{{ $category->id }}" title="{{ 'حذف' }}"><i
                            class="fa fa-trash"></i></button> --}}
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#delete{{ ''}}" title="{{ 'حذف' }}"><i
                                class="fa fa-trash"></i></button>
        </td>
        </tr>
              <!-- delete_modal_category -->
              {{-- <div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}
                <div class="modal fade" id="delete{{ '' }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                {{ 'حذف تصنيف' }}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ '' }}" method="post">
                                {{ method_field('Delete') }}
                                @csrf
                                {{ 'هل انت متأكد من عملية الحذف' }}
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">{{ 'اغلاق' }}</button>
                                    <button type="submit"
                                        class="btn btn-danger">{{ 'حذف' }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {{-- @endforeach --}}
    </tbody>
</table>

@endsection
