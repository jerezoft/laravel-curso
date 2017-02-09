<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
     <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
 
   <script src="{{asset('bootstrap/js/jquery.js')}}"></script> 

    </head>
  <body>
  <div class="container">
    <h1>@yield('titulo')</h1>
     @yield('content')
 </div>
   




   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('bootstrap/js/index.js')}}"></script>
  </body>
</html>
