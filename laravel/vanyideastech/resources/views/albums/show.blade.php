@extends('layouts.app_album')

@section('content')
    <h1>{{$album->name}}</h1>
    <a class="button secondary" href="/albums">Go Back</a>
    <a class="button secondary" href="/photos/create/{{$album->id}}">Upload Photo to Album</a>
    <hr>
     @if(count($album->photos) > 0)
        <?php
            $colcount = count($album->photos);
            $i = 1;
        ?>
        <div id="photos">
             <div class="row text-center">
                    @foreach($album->photos as $photo)
                        @if($i==$colcount)
                            <div class='medium-4 columns end'>
                                <a href="/photos/{{$photo->id}}">
                                    <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photos}}" alt="{{$photo->title}}">
                                </a>
                                <br>
                                <h4>{{$photo->title}}</h4>
                            
                        @else
                            <div class='medium-4 columns'>
                                <a href="/photos/{{$photo->id}}">
                                    <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photos}}" alt="{{$photo->title}}">
                                </a>
                                <br>
                                <h4>{{$photo->title}}</h4>
                           
                        @endif
                        
                        @if($i % 3 == 0)
                             </div></div>{{--  end class medium-4....  --}}
                             <div class="row text-center">
                        @else
                              </div>   
                        @endif
                        <?php $i++; ?>
                    @endforeach
        </div>{{--  end id="albums"  --}}
        </div> 
    @else
        <p>No photos to display</p>                  
    @endif
@endsection