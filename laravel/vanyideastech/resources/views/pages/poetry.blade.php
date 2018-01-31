@extends('layouts.app')


@section('content') {{--  to insert the contents written here in the layouts.app body  --}}
    <h1>{{$title}}</h1>
    <h1>Free your thoughts...</h1>
@endsection


@section('sidebar')
    @parent {{--  shows the contents written in layouts.app  --}}
    <p>This is appended sidebar</p>
@endsection
