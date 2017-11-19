@extends('layouts.app')

@section('content')
 
  <h1> {{$title}} </h1>
  @if(count($projects)>0)
    @foreach($projects as $project)
      <ul class="list-group">
         <li class="list-group-item">{{$project }}</li>
      </ul>
    @endforeach
  @endif
  
@endsection