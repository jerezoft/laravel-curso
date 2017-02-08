<h1>Suma entre dos numero</h1>
<form action="{{url('home/suma')}}">
	<label for="">Numero 1</label>
	<input type="text" name="numero1" />
	<label for="">Numero 2</label>
	<input type="text" name="numero2" />
	<input type="submit" value="Suma">
	</form>
{{
$numero1+$numero2
}}