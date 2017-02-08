@extends('layouts.home');
@section('titulo','Validar Formulario')

@section('content')
 <form method="post" action="{{url('home/validarformulario')}}">
	<div class="form-group">
		
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" class="form-control"/>
		<div class="text-danger">{{$errors->formularios->first('nombre')}}</div>
	</div>
	{{csrf_field()}}
	<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
@stop


