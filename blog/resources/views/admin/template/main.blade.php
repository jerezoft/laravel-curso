<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','default')</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('bootstrap/css/index.css')}}">

</head>
<style>
	
	video{
	position: fixed;
	min-width: 100%;
	min-height: 100%;
	transform: : translateX(-50%) translateY(-50%);
	z-index: -1;
	filter: grayscale(100%);
}

</style>
<body>
 	<video src="{{ asset('video/cielo.mov')}}" autoplay loop></video>
	<div class="container">
	@include('admin.template.partials.nav')
	<section>
		

<div class="panel panel-info">
  <div class="panel-heading">@yield('titulocontent','Sin definir')</div>
  <div class="panel-body">

		@if (session()->has('flash_notification.message'))
    <div class="alert alert-{{ session('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        {!! session('flash_notification.message') !!}
    </div>
@endif
@include('admin.template.partials.errores')  

		
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