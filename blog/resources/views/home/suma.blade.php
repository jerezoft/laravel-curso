<h1>Suma</h1>
<form method="post" action="{{url('home/suma')}}">
	<label for="">Numero uno</label>
	<input type="text" name="numero1" value={{$numero1}}>
	<label for="">Numero Dos</label>
	<input type="text" name="numero2" value={{$numero2}}>
	<label>Numero tres</label>
	<input type="text" name="numero3" value={{$numero3}}>
		{{csrf_field()}}
	<input type="submit" name="Sumar" value="Sumar Numero">

</form>
{{ $numero1+$numero2+$numero3}}



 