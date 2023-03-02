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

            @foreach ($posts as $post)
                <td>1</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{!! Str::limit($post->description, 5, '..') !!}</td>
                <td><img src="{{ $post->image_url }}" height="100px" width="100px" alt=""></td>
                <td>{{ $post->user->name }}</td>
                <td>{{ '' }}</td>

                <td>
                    <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-info btn-sm" title="{{ 'استرجاع' }}"><i
                            class="fa fa-edit"></i></a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#delete{{ $post->id }}" title="{{ 'حذف' }}"><i
                                class="fa fa-trash"></i></button>
                </td>
                </tr>
                <!-- delete_modal_post -->
                <div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" role="dialog"
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
                                <form action="{{ route('posts.forsedelete', $post->id) }}" method="post">
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
            @endforeach
        </tbody>
    </table>
    {{-- {{ $posts->withQueryString()->links() }} --}}
@endsection

