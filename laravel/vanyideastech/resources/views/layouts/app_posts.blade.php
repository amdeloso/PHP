
<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name', 'Vany Ideas')}}</title>
    {{--  <link rel="stylesheet" href="/css/app.css">  --}} {{--  all compiled css from public>css>app.css  --}}
    {{--  <link rel="stylesheet" href="/css/app.css">  --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

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

    
  {{--  for posts  --}} 
   <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>  
</body>
</html>