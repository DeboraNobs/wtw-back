@extends('template')

@section('tituloNavegador', 'Detalles de la asesoría')

@section('contenido')
    <div class="container py-3 d-flex justify-content-center">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="max-width: 800px;">

            <div class="card-header text-white py-4 text-center bg-gradient-primary">
                <h2 class="fw-light mb-2">Detalles de la asesoría</h2>
                {{ ($asesoria->usuario?->nombre ?? 'Nombre aun especificado') . ' ' . ($asesoria->usuario?->apellidos ?? '') }}
                <h4 class="fw-bold mb-0">{{ $asesoria->nacionalidad->nacionalidad ?? 'No especificada' }}</h4>

            </div>


            @if ($asesoria->destino && $asesoria->destino->imagen)
                <div class="mb-2 mt-4 d-flex justify-content-center">
                    <img src="{{ asset('storage/' . $asesoria->destino->imagen) }}"
                        alt="Imagen de {{ $asesoria->destino->nombre }}" class="img-fluid rounded-3"
                        style="width: 500px; height: 300px; object-fit: cover;">
                </div>
            @else
                <div class="mb-2">
                    <p class="text-muted">No hay imagen disponible.</p>
                </div>
            @endif


            <div class="card-body p-4 text-center">

                <div class="mb-3 p-3 bg-light rounded-3 border">
                    <h4 class="fw-bold text-dark">
                        <i class="bi bi-geo-alt text-dark fs-4"></i>
                    </h4>
                    <p class="fw-bold">{{ $asesoria->descripcion }}</p>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <i class="bi bi-check-circle text-dark fs-4"></i>
                            <h5 class="fw-light">Estado</h5>
                            <span
                                class="btn btn-outline-{{ $asesoria->estado == 'Pendiente'
                                    ? 'success'
                                    : ($asesoria->estado == 'En_proceso'
                                        ? 'warning'
                                        : ($asesoria->estado == 'Finalizado'
                                            ? 'info'
                                            : 'secondary')) }}">
                                {{ ucfirst($asesoria->estado) }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <i class="bi bi-map text-dark fs-4"></i>
                            <h5 class="fw-light">Destino</h5>
                            <p class="text-dark">{{ $asesoria->destino->nombre }}</p>
                        </div>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <i class="bi bi-file-earmark-check text-dark fs-4"></i>
                            <h5 class="fw-light">Quiere postulación</h5>
                            <span class="btn btn-outline-{{ $asesoria->quiere_postulacion ? 'success' : 'danger' }}">
                                {{ $asesoria->quiere_postulacion ? 'Sí' : 'No' }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <i class="bi bi-shield-lock text-dark fs-4"></i>
                            <h5 class="fw-light">Quiere seguro</h5>
                            <span class="btn btn-outline-{{ $asesoria->quiere_seguro ? 'success' : 'danger' }}">
                                {{ $asesoria->quiere_seguro ? 'Sí' : 'No' }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <i class="bi bi-headset text-dark fs-4"></i>
                            <h5 class="fw-light">Quiere asistencia ilimitada</h5>
                            <span
                                class="btn btn-outline-{{ $asesoria->quiere_asistencia_ilimitada ? 'success' : 'danger' }}">
                                {{ $asesoria->quiere_asistencia_ilimitada ? 'Sí' : 'No' }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <i class="bi bi-calendar-event text-dark fs-4"></i>
                            <h5 class="fw-light">Fecha solicitud</h5>
                            <p class="text-dark">{{ $asesoria->fecha_solicitud }}</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <a href="{{ route('asesorias.index') }}" class="btn btn-outline-secondary rounded-pill px-4">
                        <i class="bi bi-arrow-left text-dark"></i> Volver
                    </a>
                    <a href="{{ route('asesorias.edit', $asesoria->id) }}"
                        class="btn btn-outline-primary rounded-pill px-4">
                        <i class="bi bi-pencil-square text-dark"></i> Editar
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
