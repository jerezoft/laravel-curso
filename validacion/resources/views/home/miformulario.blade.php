


<h1>Mi formulario</h1>

<form method="post" action="{{url('home/validarmiformulario')}}">
	<label for="nombre">Nombres</label>
	<input type="text" name="nombre">
	<div>{{$errors->formulario->first('nombre')}}</div>
	{{csrf_field()}}
	<button type="submit">Enviar</button>
</form>