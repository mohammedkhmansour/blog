@extends('layouts.admin.master')
@section('content')
    <a href="{{ route('posts.create') }}" class="btn-dark px-2 py-2 mx-2">{{ 'اضق مقال جديد' }}</a>
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
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm" title="{{ 'تعديل' }}"><i
                            class="fa fa-edit"></i></a>
                    <a href="{{ route('posts.destroy', $post->id) }}"
                        onclick="event.preventDefault(); document.getElementById('delete').submit()"
                        class="btn btn-danger btn-sm" title="{{ 'حذف' }}"><i class="fa fa-trash"></i></a>
                    <form id="delete" method="POST" action="{{ route('posts.destroy', $post->id) }}"
                        style="display: none;">
                        @method('delete')
                        @csrf
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->withQueryString()->links() }}
@endsection
