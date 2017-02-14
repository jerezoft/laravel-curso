@extends('admin.template.main')

@section('title','Categorias')
@section('titulocontent','Categorias')

@section('content')


		{!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}

			<div class="form-group">

				{!! Form::label('name','nombre') !!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Categorias','require']) !!}
				
			</div>

			<div class="form-group">
				
				{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}

@endsection
