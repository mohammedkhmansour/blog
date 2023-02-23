@extends('layouts.admin.master')
@section('content')
    <div class="card-body">
        <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
            {{ 'اضق تصنيف جديد' }}
        </button>
        <br><br>

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>التصنيف الاب</th>
                    <th>عدد المقالات</th>
                    <th>الحالة</th>
                    <th>عمليات</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($categories as $category)


                <td>1</td>
                <td>{{$category->name}}</td>
                <td>{{$category->parent_id}}</td>
                <td>1</td>
                <td>{{$category->status}}</td>
                <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                        data-target="#edit{{ $category->id }}" title="{{ 'تعديل' }}"><i
                            class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#delete{{ $category->id }}" title="{{ 'حذف' }}"><i
                            class="fa fa-trash"></i></button>
                </td>
                </tr>
                <!-- edit_modal_category -->
                <div class="modal fade" id="edit{{ $category->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                    {{ 'تعديل تصنيف' }}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- add_form -->
                                <form action="{{ route('categories.update', $category->id) }}" method="post">
                                    {{ method_field('patch') }}
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <label for="name" class="mr-sm-2">{{ 'اختر الاسم' }}
                                                :</label>
                                            <input type="text" class="form-control"
                                                value="{{ $category->name }}" name="name">
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">التصنيف الأب</label>
                                                <select name="parent_id" @class([
                                                    'form-control',
                                                    'is-invalid'  => $errors->has('parent_id')
                                                ])>
                                                    <option value="">بدون تصنيف</option>
                                                    @foreach ($parents as $parent)
                                                    <option value="{{$parent->id}}" @selected($category->parent_id == $parent->id)>{{$parent->name}}</option>
                                                    @endforeach

                                                </select>
                                                @error('parent_id')
                                                <div class="text-danger">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="active" @checked($category->status == 'active')>

                                                <label class="form-check-label" for="exampleRadios1">
                                                  فعال
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="inactive" @checked($category->status == 'inactive')>
                                                <label class="form-check-label" for="exampleRadios2">
                                                  غير فعال
                                                </label>
                                              </div>

                                        </div>

                                    </div>

                                    <br><br>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">{{ 'اغلاق' }}</button>
                                        <button type="submit"
                                            class="btn btn-success">{{ 'ارسال' }}</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- delete_modal_category -->
                <div class="modal fade" id="delete{{ $category->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                    {{ trans('categories_trans.delete_category') }}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                    {{ method_field('Delete') }}
                                    @csrf
                                    {{ 'هل انت متأكد من عملية الحذف' }}
                                    <input id="id" type="hidden" name="id" class="form-control"
                                        value="{{ $category->id }}">
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
        <!-- add_modal_category -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                {{ 'اضف تصنيف جديد' }}
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- add_form -->
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="name" class="mr-sm-2">{{ 'اختر الاسم' }}
                            :</label>
                        <input type="text" class="form-control"
                         name="name">
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="">التصنيف الأب</label>
                            <select name="parent_id" @class([
                                'form-control',
                                'is-invalid'  => $errors->has('parent_id')
                            ])>
                                <option value="">بدون تصنيف</option>
                                @foreach ($parents as $parent)
                                <option value="{{$parent->id}}" @selected($category->parent_id == $parent->id)>{{$parent->name}}</option>
                                @endforeach

                            </select>
                            @error('parent_id')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="active">
                            <label class="form-check-label" for="exampleRadios1">
                              فعال
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="inactive">
                            <label class="form-check-label" for="exampleRadios2">
                              غير فعال
                            </label>
                          </div>

                    </div>
                </div>
                <br><br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-dismiss="modal">{{ 'اغلاق' }}</button>
            <button type="submit" class="btn btn-success">{{ 'حفظ' }}</button>
        </div>
        </form>

    </div>
</div>
</div>
    </div>
    <!-- /.card-body -->
@endsection
