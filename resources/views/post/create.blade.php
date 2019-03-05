@extends('post.home')
@section('title', 'messages.add_new')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>{{__('messages.add_new')}}</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                    @csrf
                    {{--<div class="form-group">--}}
                    {{--<label>Tên blog</label>--}}
                    {{--<input type="text" class="form-control" name="name"  placeholder="Enter name" required>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('messages.title')}}</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('messages.content')}}</label>
                        <input type="text" class="form-control" name="content" placeholder="Enter content" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('messages.image')}}</label>
                        <input type="file" class="form-control" name="image" placeholder="Enter content" required>
                    </div>

                    <button type="submit" class="btn btn-primary">{{__('messages.submit')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection