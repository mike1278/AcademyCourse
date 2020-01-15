@extends('layouts.app')

@section('content')
	<div class="panel">
		<div class="panel-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Ver mas</th>
						<th>Status</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td><a href="{{ route('users.show',$user->id) }}">Ver mas</a></td>
						@can('users.status')
							<td><a href="{{ route('users.status',$user->id) }}">{{ $user->hasRole('Disable')?'Habilitar':'Desabilitar' }}</a></td>
						@endcan
						@can('users.destroy')
							<td>
								<form action="{{ route('users.destroy',$user->id) }}" method="post" accept-charset="utf-8">
									@csrf
									@method('DELETE')
									<button class="btn btn-sm btn-danger">Eliminar</button>
								</form>
							</td>
						@endcan
					</tr>
					@endforeach
				</tbody>
			</table>
			{{ $users->render() }}
		</div>
	</div>
@endsection