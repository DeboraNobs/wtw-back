@extends('template')

@section('tituloNavegador', 'Detalles de la experiencia')

@section('contenido')
<div class="container py-3 d-flex justify-content-center">
    <div class="card shadow-lg border-0 rounded-4" style="max-width: 800px;">
        <div class="card-header bg-gradient-primary text-white py-4 text-center rounded-top">
            <h2 class="fw-light">Detalles de la experiencia en {{ $experiencia->destino->nombre }}</h2>
        </div>
        <div class="card-body p-4">

            @if ($experiencia->destino->imagen)
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/' . $experiencia->destino->imagen) }}"
                         alt="Imagen de {{ $experiencia->destino->nombre }}"
                         class="img-fluid rounded-3 shadow-sm"
                         style="width: 100%; max-height: 400px; object-fit: cover;">
                </div>
            @else
                <div class="mb-4 text-center">
                    <p class="text-muted">No hay imagen disponible.</p>
                </div>
            @endif

            <div class="text-center">
                <h4 class="fw-bold text-primary"><i class="bi bi-geo-alt-fill"></i> {{ $experiencia->titulo }}</h4>
                <p class="text-muted"><i class="bi bi-calendar-event"></i> Publicado el: <strong>{{ $experiencia->fecha_publicacion }}</strong></p>
            </div>

            <div class="px-3">
                <p class="mb-2"><i class="bi bi-person-circle text-primary"></i> <strong>Autor:</strong> {{ $experiencia->autor }}</p>
                <p class="mb-2"><i class="bi bi-bookmark text-primary"></i> <strong>Subtítulo:</strong> {{ $experiencia->subtitulo }}</p>
                <p class="mb-3"><i class="bi bi-file-text text-primary"></i> <strong>Contenido:</strong></p>
                <div class="border rounded-3 p-3 bg-light text-secondary">
                    {{ $experiencia->contenido }}
                </div>
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="{{ route('experiencias.index') }}" class="btn btn-outline-secondary rounded-pill">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>

                @if (auth()->user()->rol === 'admin')
                    <a href="{{ route('experiencias.edit', $experiencia->id) }}" class="btn btn-outline-primary rounded-pill">
                        <i class="bi bi-pencil-square"></i> Editar
                    </a>
                @endif
                
            </div>
        </div>
    </div>
</div>

@endsection
