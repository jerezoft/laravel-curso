<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','default')</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('bootstrap/css/index.css')}}">

</head>
<body>
	<div class="container">
	@include('admin.template.partials.nav')
	<section>
		

<div class="panel panel-info">
  <div class="panel-heading">@yield('titulocontent','Sin definir')</div>
  <div class="panel-body">

		@yield('content')

  </div>
 
</div>		

	</section>
		@include('admin.template.partials.footer')
</div>
	

	<script src="{{asset('bootstrap/js/jquery.js')}}"></script> 
   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>