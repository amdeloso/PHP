@extends('layouts.app')

@section('content')
 
  <h1> {{$title}} </h1>

  @if(count($projects)>0)
    @foreach($projects as $project)

        <li>{{$project }}</li>

    @endforeach
  @endif
  
@endsection