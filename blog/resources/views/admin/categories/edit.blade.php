@extends('admin.template.main')

@section('title','Categorias')
@section('titulocontent',' Editar Categoria '.$ca->name)

@section('content')


		{!! Form::open(['route'=>['categories.update',$ca],'method'=>'PUT']) !!}

			<div class="form-group">

				{!! Form::label('name','nombre') !!}
				{!! Form::text('name',$ca->name,['class'=>'form-control','placeholder'=>'Nombre Categorias','require']) !!}
				
			</div>

			<div class="form-group">
				
				{!! Form::submit('Editar ',['class'=>'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}

@endsection
