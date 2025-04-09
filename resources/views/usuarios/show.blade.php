@extends('template')

@section('tituloNavegador', 'Detalles del Usuario')

@section('contenido')
<div class="container py-3">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-gradient-primary text-white py-4 text-center">
            <h2 class="fw-light">Detalles del Usuario</h2>
        </div>
        <div class="card-body text-center">
            <img src="https://api.dicebear.com/7.x/adventurer/svg?seed={{ $usuario->id }}"
                alt="Avatar"
                class="rounded-circle mb-3" width="150">

            <h4 class="fw-bold">{{ $usuario->nombre }} {{ $usuario->apellidos }}</h4>
            <p class="text-muted mb-1"><i class="bi bi-envelope"></i> {{ $usuario->email }}</p>
            <p class="text-muted mb-3"><i class="bi bi-person-badge"></i> Rol: {{ $usuario->rol }}</p>
            <p class="text-muted mb-3"><i class="bi bi-calendar-check"></i> Fecha registro: {{ $usuario->fecha_registro }}</p>
            <p class="text-muted mb-3"><i class="bi bi-cake2"></i> Fecha nacimiento: {{ $usuario->fecha_nacimiento }}</p>
            <p class="text-muted mb-3"><i class="bi bi-globe"></i> Nacionalidad: {{ $usuario->nacionalidad->nacionalidad }}</p>

            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('usuarios.index') }}" class="btn btn-outline-secondary rounded-pill">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-outline-primary rounded-pill">
                    <i class="bi bi-pencil-square"></i> Editar
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #6a11cb, #2365d7);
    }
</style>
@endsection
