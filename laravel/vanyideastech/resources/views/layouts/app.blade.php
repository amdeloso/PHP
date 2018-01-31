<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
     
    <div class="app">

         @include("inc.navbar")

        <div class="container">
            {{--  show the showcase content to home page only  --}}
            @if(Request::is('/'))
                @include("inc.showcase")
            @endif
        
            <div class="row">
                {{--  main content  --}}
                <div class="col-md-8 col-lg-8">

                @include('inc.messages')
                
                    {{--  contents are al shown in all created pages  --}}  
                    @yield('content')

                </div>{{--  end main content  --}}

                {{--  sidebar  --}}
                <div class="col-md-8 col-lg-4">
                  
                    @include("inc.sidebar")

                </div>{{--  end sidebar  --}}

            </div>{{--  end row  --}}    
        </div>{{--  end container  --}}

        <footer id="footer" class="text-center">
            <p>Copyright 2018 &copy; VanyIdeasTech</p>
        </footer>
    </div>   

    <!-- Scripts -->
    {{--  for posts  --}} 
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> 
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
