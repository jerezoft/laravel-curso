@extends('layouts.home');
@section('titulo','Validar Formulario')

@section('content')
<div class="text-seccess">
	@if(Session::has('message'))
		{{Session::get('message')}}
	@endif	
</div>
 <form method="post" action="{{url('home/validarmiformulario')}}">
	<div class="form-group">
		
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" class="form-control"/>
		<label for="email">Correo</label>
		<input type="text" name="correo" class="form-control"/>
		<div class="text-danger">{{$errors->formulario->first('nombre')}}</div>
		<div class="text-danger">{{$errors->formulario->first('correo')}}</div>
	</div>
	{{csrf_field()}}
	<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
@stop


