@extends('admin.template.main')

@section('title','Crear Usuario')
@section('titulocontent','adimistracion de usuarios')

@section('content')



	

<!--                                      FIN ERRORES                                             -->	



<!--                                      BOTON CERRAR DE LOS MENSAJES FLAGS                     -->							



<!--                                      FIN	BOTON CERRAT							                 -->	





								  
		{!! Form::open(['route'=>'users.store','method'=>'POST']) !!}


			<div class="form-group">
			{!! Form::label('name','nombre') !!}
			{!! Form::text('name',null,['class'=> 'form-control','required','placeholder'=>'Nombre completo']) !!}
			</div>


			<div class="form-group">
			{!! Form::label('email','Correo Electronico') !!}
			{!! Form::email('email',null,['class'=> 'form-control','required','placeholder'=>'Correo Electronico']) !!}
			</div>

			<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password',['class'=> 'form-control','required','placeholder'=>'********']) !!}
			</div>

			<div class="form-group">
			{!! Form::label('type','tipo') !!}
			{!! Form::select('type',[''=>'Selecciones un nivel','member'=>'miembro','admin'=>'Administrador'],null ,['class'=>'form-control']) !!}
			</div>


		<div class="form-group">
				{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
			</div>

 


		{!! Form::Close() !!}

@endsection
