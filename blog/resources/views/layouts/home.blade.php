<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla básica de Bootstrap</title>
 

    <link href="{{asset('css/index.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet" media="screen"> 
  
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
     <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
 


    </head>
  <body>
    <h1>@yield('titulo')</h1>
 
   




   <script src="{{asset('bootstrap/js/jquery.js')}}"></script> 
   <script src="{{asset('boortrap/js/bootstrap.min.js')}}"></script>
  </body>
</html>
