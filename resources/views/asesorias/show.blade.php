@extends('template')

@section('tituloNavegador', 'Detalles de la asesoría')

@section('contenido')
<div class="container py-5 d-flex justify-content-center">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="max-width: 800px;">

        <div class="card-header text-white py-4 text-center bg-gradient-primary">
            <h2 class="fw-light mb-2">Detalles de la asesoría</h2>
            {{ ($asesoria->usuario?->nombre ?? 'Nombre aun especificado') . ' ' . ($asesoria->usuario?->apellidos ?? '') }}
            <h4 class="fw-bold mb-0">{{ $asesoria->nacionalidad->nacionalidad ?? 'No especificada' }}</h4>

        </div>

        <div class="card-body p-4 text-center">

            <div class="mb-4 p-3 bg-light rounded-3 border">
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
                        <span class="btn btn-outline-{{
                            $asesoria->estado == 'Activo' ? 'success' :
                            ($asesoria->estado == 'Pendiente' ? 'warning' :
                            ($asesoria->estado == 'Finalizado' ? 'info' : 'secondary')) }}">
                            {{ ucfirst($asesoria->estado) }}
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 border">
                        <i class="bi bi-map text-dark fs-4"></i>
                        <h5 class="fw-light">Destino</h5>
                        <p class="text-dark">{{ $asesoria->destino->nombre  }}</p>
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
                        <span class="btn btn-outline-{{ $asesoria->quiere_asistencia_ilimitada ? 'success' : 'danger' }}">
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
                <a href="{{ route('asesorias.edit', $asesoria->id) }}" class="btn btn-outline-primary rounded-pill px-4">
                    <i class="bi bi-pencil-square text-dark"></i> Editar
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #6a11cb, #2365d7);
    }
    .btn {
        font-size: 1rem;
        padding: 0.5em 1.2em;
        border-radius: 10px;
    }
    .btn-outline-success {
        border: 2px solid #28a745;
        color: #28a745;
    }
    .btn-outline-danger {
        border: 2px solid #dc3545;
        color: #dc3545;
    }
    .btn-outline-warning {
        border: 2px solid #ffc107;
        color: #ffc107;
    }
    .btn-outline-info {
        border: 2px solid #17a2b8;
        color: #17a2b8;
    }
    .btn-outline-secondary {
        border: 2px solid #6c757d;
        color: #6c757d;
    }
</style>
@endsection
