@extends('post.home')
@section('title', 'messages.edit')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>{{__('messages.edit')}}</h1></div>
            <div class="col-12">
                <form method="post"  enctype="multipart/form-data" action="{{ route('post.update', $post->id) }}">
                    @csrf
                    {{--<div class="form-group">--}}
                    {{--<label>Tên Bog</label>--}}
                    {{--<input type="text" class="form-control" name="name" value="{{ $blog->name }}" required>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label>{{__('messages.title')}}</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}" required></div>
                    <div class="form-group">
                        <label>{{__('messages.content')}}</label>
                        <input type="text" class="form-control" name="content" value="{{ $post->content }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('messages.image')}}</label>
                        <input type="file" class="form-control" name="image"  >
                        <img src="{{asset("storage/$post->image")}}" alt="" width="150" height="150">
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.update')}}</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">{{__('messages.back')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection