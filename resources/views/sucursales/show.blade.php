@extends('template')

@section('tituloNavegador', 'Detalles de la sucursal')

@section('contenido')
<div class="container py-3">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-gradient-primary text-white py-4 text-center">
            <h2 class="fw-light">Detalles de la sucursal</h2>
        </div>
        <div class="card-body text-center">
            <img src="https://api.dicebear.com/7.x/identicon/svg?seed={{ $sucursal->id }}&backgroundColor=0066cc&shapeColor=ffffff"
                alt="Avatar de sucursal"
                class="rounded-circle mb-3" width="150">

            <h4 class="fw-bold">{{ $sucursal->nombre }} </h4>
            <p class="text-muted mb-1"><i class="bi bi-envelope"></i> Direccion: {{ $sucursal->direccion }}</p>
            <p class="text-muted mb-3"><i class="bi bi-person-badge"></i> Latitud: {{ $sucursal->latitud }}</p>
            <p class="text-muted mb-3"><i class="bi bi-calendar-check"></i> Longitud: {{ $sucursal->longitud }}</p>
            <p class="text-muted mb-3"><i class="bi bi-cake2"></i> Email: {{ $sucursal->email }}</p>
            <p class="text-muted mb-3"><i class="bi bi-globe"></i> Año apertura: {{ $sucursal->anio_apertura }}</p>

            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('sucursales.index') }}" class="btn btn-outline-secondary rounded-pill">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>

                @if (auth()->user()->rol === 'admin')
                    <a href="{{ route('sucursales.edit', $sucursal->id) }}" class="btn btn-outline-primary rounded-pill">
                        <i class="bi bi-pencil-square"></i> Editar
                    </a>
                @endif

            </div>
        </div>
    </div>
</div>

@endsection
