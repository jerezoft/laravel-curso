@extends('layouts.home')
@section('titulo','Validar Formulario')

@section('content')
<div class="text-seccess" id="result">
	@if(Session::has('message'))
		{{Session::get('message')}}
	@endif	
</div>


 <form method="post" action="{{url('home/validarmiformulario')}}" id="form">
	<div class="form-group">
		
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" class="form-control"/>
		<div class="text-danger" id="error_nombre">{{$errors->formulario->first('nombre')}}</div>
	
	</div>
	<div class="form-group">
		
		
		<label for="email">Correo</label>
		<input type="text" name="correo" class="form-control"/>
		<div class="text-danger" id="error_email">{{$errors->formulario->first('correo')}}</div>
	</div>

	{{csrf_field()}}
	<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
	<script>
		
$(function(){

	$("#form").submit(function(e){

			var fields  = $(this).serialize();
			$.post("{{url('home/validarmiformulario')}}",fields,function(data){

					if (data.valid !== undefined) {
						$("#result").html("En hora buena formulario enviado correctamente");
						$("#form")[0].reset();
						$("#error_nombre").html('');
						$("#error_email").html('');
					}else{
							$("#error_nombre").html('');
							$("#error_email").html('');
						if (data.nombre !== undefined) {
							$("#error_nombre").html(data.nombre);
						}
						if(data.correo !== undefined){
							$("#error_email").html(data.correo);
						}
					}

			});


			return false;
	});
})

	</script>
@stop


