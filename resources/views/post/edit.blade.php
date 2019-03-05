@extends('post.home')
@section('title', 'Chỉnh sửa Post')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Chỉnh sửa post</h1></div>
            <div class="col-12">
                <form method="post"  enctype="multipart/form-data" action="{{ route('post.update', $post->id) }}">
                    @csrf
                    {{--<div class="form-group">--}}
                    {{--<label>Tên Bog</label>--}}
                    {{--<input type="text" class="form-control" name="name" value="{{ $blog->name }}" required>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}" required></div>
                    <div class="form-group">
                        <label>content</label>
                        <input type="text" class="form-control" name="content" value="{{ $post->content }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="image"  >
                        <img src="{{asset("storage/$post->image")}}" alt="" width="150" height="150">
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection