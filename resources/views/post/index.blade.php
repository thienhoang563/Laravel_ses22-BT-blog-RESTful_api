@extends('post.home')
@section('title', 'messages.post_manager')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>{{__('messages.post_manager')}}</h1></div>
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
                    <th scope="col">{{__('messages.title')}}</th>
                    <th scope="col">{{__('messages.content')}}</th>
                    <th scope="col">{{__('messages.image')}}</th>

                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($posts) == 0)
                    <tr><td colspan="4">{{__('messages.no_data')}}</td></tr>
                @else
                    @foreach($posts as $key => $post)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            {{--<td>{{ $blog->name }}</td>--}}
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td><img src="{{asset("storage/$post->image")}}" alt="" width="150px" height="150px"></td>
                            <td><a href="{{ route('post.edit', $post->id) }}">{{__('messages.update')}}</a></td>
                            <td><a href="{{ route('post.destroy', $post->id) }}" class="text-danger" onclick="return confirm('Are you sure want to delete?')">{{__('messages.delete')}}</a></td>
                            <td><a href="{{ route('post.show', $post->id) }}">Show</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('post.create') }}">{{__('messages.add_new')}}</a>
        </div>
    </div>
@endsection