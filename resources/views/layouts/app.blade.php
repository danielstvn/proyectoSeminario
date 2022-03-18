<!doctype html>
<html lang="es">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css')}}">

    <title>SysDesing</title>
  </head>
  <body>
    
  
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')
    
    <script src="{{ url('/assets/bootstrap/js/bootstrap.bundle.min.css')}}" ></script>
  </body>
</html>