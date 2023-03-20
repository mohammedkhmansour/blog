@extends('layouts.admin.master')
@section('content')
    <div class="card-body">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>

                    <th>  الايميل</th>

                    <th>عمليات</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($newslatters as $newslatter)


                <td>{{$loop->iteration}}</td>

                <td>{{$newslatter->email}}</td>



                <td>

                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#delete{{ $newslatter->id }}" title="{{ 'حذف' }}"><i
                            class="fa fa-trash"></i></button>

                </td>
                </tr>

                <!-- delete_modal_newslatter -->
                <div class="modal fade" id="delete{{ $newslatter->id }}" tabindex="-1" role="dialog"
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
                                <form action="{{ route('newslatter.destroy', $newslatter->id) }}" method="post">
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
                </tfoot>
        </table>
        {{ $newslatters->links() }}
        {{-- {{ $posts->withQueryString()->links() }} --}}
    </div>
    <!-- /.card-body -->
@endsection
