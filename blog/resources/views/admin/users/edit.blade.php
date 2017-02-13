
@extends('admin.template.main')

@section('title','editar Usuario')
@section('titulocontent','editar  usuarios')

@section('content')
							
@if (session()->has('flash_notification.message'))
    <div class="alert alert-{{ session('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        {!! session('flash_notification.message') !!}
    </div>
@endif
						  
			{!! Form::open(['route' => ['users.update',$user->id], 'method' => 'PUT']) !!}﻿

			<div class="form-group">
			{!! Form::label('name','nombre') !!}
			{!! Form::text('name',$user->name ,['class'=> 'form-control','required','placeholder'=>'Nombre completo']) !!}
			</div>


			<div class="form-group">
			{!! Form::label('email','Correo Electronico') !!}
			{!! Form::email('email',$user->email,['class'=> 'form-control','required','placeholder'=>'Correo Electronico']) !!}
			</div>

			<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password',['class'=> 'form-control','required','placeholder'=>'********']) !!}
			</div>

			<div class="form-group">

			{!! Form::label('type','tipo') !!}
			{!! Form::select('type',['member'=>'miembro','admin'=>'Administrador'],null ,['class'=>'form-control']) !!}
			</div>


		<div class="form-group">
				{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
			</div>

 


		{!! Form::Close() !!}

@endsection
