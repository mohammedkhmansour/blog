@extends('layouts.admin.master')
@section('content')
    <div class="card-body">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th> الايميل</th>
                    <th> حالة التعليق</th>
                    <th>المقال</th>
                    <th>عمليات</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comments as $comment)


                <td>{{$loop->iteration}}</td>
                <td>{{$comment->name}}</td>
                <td>{{$comment->email}}</td>
                <td>{{$comment->approved}}</td>
                <td>{{$comment->post->name}}</td>
                <td>

                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#delete{{ $comment->id }}" title="{{ 'حذف' }}"><i
                            class="fa fa-trash"></i></button>

                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#view{{ $comment->id }}" title="{{ 'مشاهدة' }}"><i
                        class="fa fa-eye"></i></button>

                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                    data-target="#approved{{ $comment->id }}" title="{{ 'تفعيل' }}"><i
                        class="fa fa-edit"></i></button>
                </td>
                </tr>

                <!-- delete_modal_comment -->
                <div class="modal fade" id="delete{{ $comment->id }}" tabindex="-1" role="dialog"
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
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
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

                <!-- view -->
                <div class="modal fade" id="view{{ $comment->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                    {{ ' قراءة التعليق' }}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{$comment->content}}
                            </div>
                        </div>
                    </div>
                </div>

            <!-- approved_modal_comment -->
            <div class="modal fade" id="approved{{ $comment->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                {{ 'تفعيل التعليق' }}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('comments.approved', $comment->id) }}" method="get">


                                {{ 'هل انت متأكد من عملية التاكيد' }}

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">{{ 'اغلاق' }}</button>
                                    <button type="submit"
                                        class="btn btn-success">{{ 'نعم' }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

                @endforeach
                </tfoot>
        </table>
        {{ $comments->links() }}
        {{-- {{ $posts->withQueryString()->links() }} --}}
    </div>
    <!-- /.card-body -->
@endsection
