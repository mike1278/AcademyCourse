@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"><h3 class="mb-0">Usuario</h3></div>
        <div class="card-body">
        	<form action="{{ route('users.update',$user->id) }}" method="POST">
        		@csrf
        		@method('PUT')

                <p class="flex"><strong class="w-10 p-1">Nombre</strong> <input name="name" class="form-control @error('name') is-invalid @enderror"  maxlength="30" minlength="2" required type="text" value="{{ $user->name }}"></p>
                @error('name')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror

                <p class="flex"><strong class="w-10 p-1">Apellido</strong> <input name="lastname" class="form-control @error('lastname') is-invalid @enderror"  maxlength="30" minlength="2" required type="text" value="{{ $user->lastname }}"></p>
				@error('lastname')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror

                <p class="flex"><strong class="w-10 p-1">Correo</strong> <input name="email" class="form-control @error('email') is-invalid @enderror"  type="email" required value="{{ $user->email }}"></p>
				@error('email')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror

                <p class="flex"><strong class="w-10 p-1">DNI</strong> <input name="dni" class="form-control @error('dni') is-invalid @enderror"  maxlength="10" type="number" required value="{{ $user->dni }}"></p>
				@error('dni')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror
                <button class="btn btn-primary">Guardar cambios</button>
        	</form>
        </div>
    </div>
@endsection