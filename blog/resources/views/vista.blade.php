<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<div>
		@foreach ($array as $index=>$val)
		<p><h1>{{$index}} = {{$val}}</h1></p>
		@endforeach
	</div>
</body>
</html>