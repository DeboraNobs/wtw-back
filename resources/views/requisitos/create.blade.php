@extends('template')

@section('tituloNavegador', isset($requisito) ? 'Editar Requisito' : 'Crear Requisito')

@section('contenido')
    <div class="container py-5">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden" style="max-width: 600px; margin: 0 auto;">

            <div class="card-header bg-gradient-primary text-white py-4">
                <h2 class="mb-0 text-center fw-light">
                    {{ isset($requisito) ? 'Editar Requisito' : 'Crear Requisito' }}
                </h2>
            </div>

            <div class="card-body p-4">
                <form method="POST"
                    action="{{ isset($requisito) ? route('requisitos.update', $requisito->id) : route('requisitos.store') }}"
                    novalidate>
                    @csrf

                    @if(isset($requisito))
                        @method('PUT')
                    @endif

                    <div class="mb-4">
                        <label for="requisito" class="form-label text-muted small fw-bold">Requisito</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-flag text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="requisito"
                                value="{{ isset($requisito) ? $requisito->requisito : '' }}"
                                placeholder="Ingrese un requisito" required>
                        </div>
                        <div class="invalid-feedback small">
                            Por favor, ingrese una requisito válido.
                        </div>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-outline-primary rounded-pill">
                            <i class="bi bi-{{ isset($requisito) ? 'pencil' : 'plus-circle' }} me-2"></i>
                            {{ isset($requisito) ? 'Editar Requisito' : 'Crear Requisito' }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="card-footer bg-light py-3 text-center">
                <a href="{{ route('requisitos.index') }}" class="text-decoration-none text-muted small">
                    <i class="bi bi-arrow-left me-1"></i> Volver a la lista de requisitos
                </a>
            </div>
        </div>
    </div>
@endsection
