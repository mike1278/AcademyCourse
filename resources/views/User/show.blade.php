@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"><h3 class="mb-0">Usuario</h3></div>
        <div class="card-body">
            <p class="flex"><strong class="w-10">Nombre</strong> <span>{{ $user->name }}</span></p>
            <p class="flex"><strong class="w-10">Apellido</strong> <span>{{ $user->lastname }}</span></p>
            <p class="flex"><strong class="w-10">Correo</strong> <span>{{ $user->email }}</span></p>
            <p class="flex"><strong class="w-10">DNI</strong> <span>{{ $user->dni }}</span></p>
        </div>
    </div>
@endsection
