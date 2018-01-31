@extends('layouts.app')


@section('content') {{--  to insert the contents written here in the layouts.app body  --}}
    <h1>{{$title}}</h1>
   
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endsection


@section('sidebar')
    @parent {{--  shows the contents written in layouts.app  --}}
    <p>This is appended sidebar</p>
@endsection
