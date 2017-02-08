<h1>Formulario</h1>
<form method="post" action="{{url('home/form')}}">
	<label for="">Name:</label>
	<input type="text" name="nombre" value="{{$name}}">
	{{csrf_field()}}
	<button type="submit">Send</button>
</form>
Valalor del Campo name : {{$name."como estas"}}