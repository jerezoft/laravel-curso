@extends('admin.template.main')

@section('title','lista Usuario')
@section('titulocontent','lista de usuarios')

@section('content')
					<!-- REDIRJE AL CONTROLDOR QUE RECIBE ESTOS DATOS Y LOS GUARDA -->
		<a href="{{ route('users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a><hr>
	<table class="table table-striped table-responsive">

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
								<span class="label label-danger">Danger</span>
							@else

								<span class="label label-primary">Primary</span>

							@endif

				 	</td>
				 	<td>
				 	   <a href="" class="btn btn-danger glyphicon glyphicon-trash"></a>
					   <a href="" class="btn btn-warning glyphicon glyphicon-circle-arrow-down"></a>	

					</td>
				 </tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
@endsection
