@extends('layouts.app')


@section('content') {{--  to insert the contents written here in the layouts.app body  --}}
    <h1>Messages</h1>

    @if(count($messages) > 0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">Name: {{$message->name}}<li>
                <li class="list-group-item">Email: {{$message->email}}<li>
                <li class="list-group-item">Message: {{$message->message}}<li>    
            </ul>

        @endforeach
    @endif

@endsection


@section('sidebar')
    @parent {{--  shows the contents written in layouts.app  --}}
    <p>This is appended sidebar</p>
@endsection
