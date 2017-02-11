@extends('layouts.home')
@section('titulo','Validar Formulario')

@section('content')


<h1>{{$prueba->title}}</h1>
<hr>  <h2>{{$prueba->content}}</h2><hr>
<hr>{{$prueba->category->name}}<hr>

@foreach($prueba->tags as $tag)
	<strong>{{$tag->name}}</strong>
@endforeach

	
	
@stop
 



 