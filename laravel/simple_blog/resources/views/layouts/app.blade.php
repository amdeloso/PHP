<!DOCTYPE html>
<html>
<head>
	<title>Basic Website</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    {{--  include navigation menu > inc > navbar.blade.php --}}
    @include('inc.navbar')

    {{--  divide the content and sidebar  --}}
    <div class="container">

        @if(Request::is('/'))
             @include('inc.showcase')
        @endif

        <div class="row">

            {{--  content section  --}}
             <div class="com-md-8 col-lg-8">

                    @include('inc.messages')

                    @yield('content')
             </div>

             {{--  sidebar section  --}}
              <div class="com-md-4 col-lg-4">
                    @include('inc.sidebar')
             </div>
             
        </div> {{--  end div row  --}}
    </div> {{--  end div container  --}}
  
    <footer id="footer" class="text-center">
        <p>Copyright 2017 &copy; Vany</p>
    </footer>


  
</body>
</html>