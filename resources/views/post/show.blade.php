@extends('post.home')
@section('title','show')
@section('content')
<div class="col-12">
    <h1>Post Details</h1>
    <div class="card text-left" style="width: 100%">
        <div class="card-body">
            <h3>Title:</h3>
        <h3 class="card-title"> {{ $post->title }}</h3>
            <label>Content:</label>
        <p class="card-text">{{ $post->content }}</p>
        </div>
        <div class="form-group">
            <label>{{__('messages.image')}}</label>
            <img class="form-control-file" src="{{asset('storage/'.$post->image)}}" style="width: 200px; height: 200px"/>
            <a href="{{ route('post.index') }}" class="btn btn-primary">{{__('messages.back')}}</a>
        </div>
    </div>
</div>
@endsection