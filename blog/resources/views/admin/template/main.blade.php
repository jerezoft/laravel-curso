<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','default')</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

</head>
<body>
	@include('admin.template.partials.nav')
	<section>
		@yield('content')
	</section>



	<script src="{{asset('bootstrap/js/jquery.js')}}"></script> 
   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>