@extends('admin.template.main')

@section('title','Categorias')
@section('titulocontent','Categorias')

@section('content')

		<a  class="btn btn-info" href="{{ route('categories.create') }}">Registrar nueva categoria</a><hr>
		<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Action</th>
			</thead>
			<tbody>
					@foreach ($categories as $element)
					<tr>
					<td>{{ $element->id }}</td>
					<td>{{ $element->name}}</td>
					<td>
				 	<!---                               Boton Editar                            -->
				 	  <a href="{{ route('categories.edit',$element->id)  }}" class="btn  btn-warning glyphicon glyphicon-circle-arrow-down"></a>
	
					<!--                                Boton Eliminar                           -->

				 	  <a href="{{ route('categories.destroy', $element->id) }}"  onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn  btn-danger glyphicon glyphicon-trash "></a>	
				 	   	 

					</td>
					</tr>	
				 
					@endforeach

			</tbody>
						
		</table>
		</div>
			{!! $categories->render() !!}

@endsection
