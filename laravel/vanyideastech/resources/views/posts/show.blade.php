@extends('layouts.app');

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>

    <h1>{{$post->title}}</h1>
    <img style="with: 100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
    <div>
        {!!$post->body!!}
    </div>

    <hr>
     <small>Written on {{$post->created_at}}</small>
     <hr>

    @if(!Auth::guest()){{--  visible to logged in user only  --}}
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete Post', ['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
         @endif
    @endif

@endsection