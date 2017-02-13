@extends('admin.template.main')

@section('title','lista Usuario')
@section('titulocontent','lista de usuarios')

@section('content')
					<!-- REDIRJE AL CONTROLDOR QUE RECIBE ESTOS DATOS Y LOS GUARDA -->
		<a href="{{ route('users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a><hr>
	<div class="table-responsive">
	<table class="table table-striped ">

		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				 <tr>
				 	<td>{{ $user->id }}</td>
				 	<td>{{ $user->name  }}</td>
				 	<td>{{ $user->email  }}</td>
				 	<td>
							@if($user->type == 'admin')
								<span class="label label-danger">Administrador</span>
							@else

								<span class="label label-primary">Miembro</span>

							@endif

				 	</td>
				 	<td>
				 	<!---                               Boton Editar                            -->
				 	  <a href="{{ route('users.edit',$user->id) }}" class="btn  btn-warning glyphicon glyphicon-circle-arrow-down"></a>

					<!--                                Boton Eliminar                           -->
				 	  <a href="{{ route('admin.users.destroy',$user->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn  btn-danger glyphicon glyphicon-trash "></a>	
				 	   	 

					</td>
				 </tr>
			@endforeach
		</tbody>
	</table>
	</div>
	{!! $users->render() !!}
@endsection
