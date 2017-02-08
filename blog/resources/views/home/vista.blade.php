@extends('layouts.home')
@section('title','Titulos del sitio web')
@section('titulo','Hola mundo soy juan')


	
@section('content')

		@foreach($nombres as $index=>$data)
			<p>{{$index}} = {{$data}}</p>
		@endforeach

@stop

	
 
	
