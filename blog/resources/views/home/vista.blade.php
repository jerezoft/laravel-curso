@extends('layouts.home')
@section('title','Titulos del sitio web')
@section('titulo','Hola mundo soy juan')


	
@section('content')
<strong><h1>
		@foreach($nombres as $index=>$data)
			<p>{{$index}} = {{$data}}</p>
		@endforeach
 </h1></strong>
@stop

	
 
	
