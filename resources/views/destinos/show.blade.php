@extends('template')

@section('tituloNavegador', 'Detalles del Destino')

@section('contenido')
<div class="container py-3">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-gradient-primary text-white py-4 text-center">
            <h2 class="fw-light">Detalles de {{ $destino->nombre }}</h2>
        </div>
        <div class="card-body text-center">

            @if ($destino->imagen)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $destino->imagen) }}"
                         alt="Imagen de {{ $destino->nombre }}"
                         class="img-fluid rounded-3"
                         style="width: 500px; height: 300px; object-fit: cover;">
                </div>
            @else
                <div class="mb-4">
                    <p class="text-muted">No hay imagen disponible.</p>
                </div>
            @endif

            <h4 class="fw-bold"><i class="bi bi-geo-alt"></i> {{ $destino->nombre }}</h4>

            <p class="text-muted mb-1"><i class="bi bi-currency-exchange"></i> Moneda: {{ $destino->moneda }}</p>
            <p class="text-muted mb-1"><i class="bi bi-cash"></i> Salario Mínimo: {{ $destino->salario_minimo }}</p>
            <p class="text-muted mb-1"><i class="bi bi-wallet"></i> Salario Promedio: {{ $destino->salario_promedio }}</p>
            <p class="text-muted mb-1"><i class="bi bi-cart"></i> Costo de Vida Promedio: {{ $destino->costo_vida_promedio }}</p>

            <p class="text-muted mb-1"><i class="bi bi-globe2"></i> Dificultad de Visa:</p>
            <div class="d-flex justify-content-center">
                <div class="progress" style="height: 12px; width: 20%; background-color: #e0e0e0; border-radius: 10px; overflow: hidden;">
                    <div class="progress-bar" role="progressbar"
                        style="width: {{ ($destino->dificultad_visa / 10) * 100 }}%;
                                background: linear-gradient(135deg, #6a11cb, #2365d7);
                                border-radius: 10px;"
                        aria-valuenow="{{ $destino->dificultad_visa }}" aria-valuemin="1" aria-valuemax="10">
                    </div>
                </div>
            </div>

            <p class="text-muted mb-1"><i class="bi bi-mortarboard"></i> Requiere Estudios: {{ $destino->requiere_estudios ? 'Sí' : 'No' }}</p>
            <p class="text-muted mb-1"><i class="bi bi-airplane"></i> Aplica Exterior: {{ $destino->aplica_exterior ? 'Sí' : 'No'}}</p>
            <p class="text-muted mb-1"><i class="bi bi-translate"></i> Requiere Idiomas: {{ $destino->requiere_idiomas ? 'Sí' : 'No' }}</p>
            <p class="text-muted mb-1"><i class="bi bi-check-circle"></i> Disponible: {{ $destino->esta_disponible ? 'Sí' : 'No' }}</p>

            <div class="d-flex justify-content-center gap-3">
                
                <a href="{{ route('destinos.index') }}" class="btn btn-outline-secondary rounded-pill">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>

                <a href="{{ route('destinos.edit', $destino->id) }}" class="btn btn-outline-primary rounded-pill">
                    <i class="bi bi-pencil-square"></i> Editar
                </a>

            </div>
        </div>
    </div>
</div>

@endsection
