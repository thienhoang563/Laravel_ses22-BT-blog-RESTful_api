@extends('post.home')
@section('title', 'Danh sách Post')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>POST MANAGER</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    {{--<th scope="col">Name</th>--}}
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Image</th>

                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($posts) == 0)
                    <tr><td colspan="4">Không có dữ liệu</td></tr>
                @else
                    @foreach($posts as $key => $post)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            {{--<td>{{ $blog->name }}</td>--}}
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td><img src="{{asset("storage/$post->image")}}" alt="" width="150px" height="150px"></td>
                            <td><a href="{{ route('post.edit', $post->id) }}">sửa</a></td>
                            <td><a href="{{ route('post.destroy', $post->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                            <td><a href="{{ route('post.show', $post->id) }}">Xem nội dung chi tiết</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('post.create') }}">Thêm mới</a>
        </div>
    </div>
@endsection