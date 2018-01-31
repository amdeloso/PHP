@extends('layouts.app_album')

@section('content')
    <h3>Create Album</h3>

    {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{Form::text('name', '', ['placeholder' => 'Album Name'])}}
        {{Form::textarea('description', '', ['placeholder' => 'Description'])}}
        {{Form::file('cover_image')}}
        {{Form::submit('submit')}}
    {!! Form::close() !!}
@endsection 