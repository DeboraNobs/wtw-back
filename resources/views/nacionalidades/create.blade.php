@extends('template')

@section('tituloNavegador', isset($nacionalidad) ? 'Editar Nacionalidad' : 'Crear Nacionalidad')

@section('contenido')
    <div class="container py-5">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden" style="max-width: 600px; margin: 0 auto;">

            <div class="card-header bg-gradient-primary text-white py-4">
                <h2 class="mb-0 text-center fw-light">
                    {{ isset($nacionalidad) ? 'Editar Nacionalidad' : 'Crear Nacionalidad' }}
                </h2>
            </div>

            <div class="card-body p-4">
                <form method="POST"
                    action="{{ isset($nacionalidad) ? route('nacionalidades.update', $nacionalidad->id) : route('nacionalidades.store') }}"
                    novalidate>
                    @csrf

                    @if(isset($nacionalidad))
                        @method('PUT')
                    @endif

                    <div class="mb-4">
                        <label for="nombre" class="form-label text-muted small fw-bold">Nacionalidad</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-flag text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="nacionalidad"
                                value="{{ isset($nacionalidad) ? $nacionalidad->nacionalidad : '' }}"
                                placeholder="Ingrese una nacionalidad" required>
                        </div>
                        <div class="invalid-feedback small">
                            Por favor, ingrese una nacionalidad válida.
                        </div>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary rounded-pill">
                            <i class="bi bi-{{ isset($nacionalidad) ? 'pencil' : 'plus-circle' }} me-2"></i>
                            {{ isset($nacionalidad) ? 'Editar Nacionalidad' : 'Crear Nacionalidad' }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="card-footer bg-light py-3 text-center">
                <a href="{{ route('nacionalidades.index') }}" class="text-decoration-none text-muted small">
                    <i class="bi bi-arrow-left me-1"></i> Volver a la lista de nacionalidades
                </a>
            </div>
        </div>
    </div>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #6a11cb, #2365d7);
        }

        .form-control:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 0 2px rgba(106, 17, 203, 0.1);
        }
        .btn-primary {
            background-color: #6a11cb;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #6a11cb, #2365d7);
        }

    </style>

@endsection
