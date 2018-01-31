<!DOCTYPE html>
<html>
<head>
    <title>Vany Ideas Tech</title>
    {{--  <link rel="stylesheet" href="/css/app.css">  --}} {{--  all compiled css from public>css>app.css  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css">
</head>
<body>

    @include('inc.topbar')

    <br>
   <div class="row">
        @include('inc.messages_album')
        @yield('content')
   </div>
    
</body>
</html>
