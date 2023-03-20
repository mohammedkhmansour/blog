@extends('layouts.admin.master')
@section('content')
    <div class="card-body">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الاسم الاول</th>
                    <th> الاسم الثاني</th>
                    <th>  الايميل</th>
                    <th>الرسالة</th>
                    <th>عمليات</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($contacts as $contact)


                <td>{{$loop->iteration}}</td>
                <td>{{$contact->firstn}}</td>
                <td>{{$contact->lastn}}</td>
                <td>{{$contact->email}}</td>
                {{-- <td>{{$contact->message}}</td> --}}
                <td>{!! Str::limit($contact->message, 10, ' ...') !!}</td>


                <td>

                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#delete{{ $contact->id }}" title="{{ 'حذف' }}"><i
                            class="fa fa-trash"></i></button>

                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#view{{ $contact->id }}" title="{{ 'مشاهدة' }}"><i
                        class="fa fa-eye"></i></button>

                    {{-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                    data-target="#approved{{ $contact->id }}" title="{{ 'تفعيل' }}"><i
                        class="fa fa-edit"></i></button> --}}
                </td>
                </tr>

                <!-- delete_modal_contact -->
                <div class="modal fade" id="delete{{ $contact->id }}" tabindex="-1" role="dialog"
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
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
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
                <div class="modal fade" id="view{{ $contact->id }}" tabindex="-1" role="dialog"
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
                                {{$contact->message}}
                            </div>
                        </div>
                    </div>
                </div>

            <!-- approved_modal_contact -->
            {{-- <div class="modal fade" id="approved{{ $contact->id }}" tabindex="-1" role="dialog"
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
                            <form action="{{ route('contacts.approved', $contact->id) }}" method="get">


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
            </div> --}}

                @endforeach
                </tfoot>
        </table>
        {{ $contacts->links() }}
        {{-- {{ $posts->withQueryString()->links() }} --}}
    </div>
    <!-- /.card-body -->
@endsection
