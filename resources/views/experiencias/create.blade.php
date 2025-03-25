@extends('template')

@section('tituloNavegador', 'Crear Experiencia')

@section('contenido')

<div class="container py-5">
    <div class="card shadow-sm border-0 rounded-4 overflow-hidden" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header bg-gradient-primary text-white py-4">
            <h2 class="mb-0 text-center fw-light">
                {{ isset($experiencia) ? 'Editar Experiencia' : 'Crear Experiencia' }}
            </h2>
        </div>

        <div class="card-body p-4">
            <form method="POST" action="{{ isset($experiencia) ? route('experiencias.update', $experiencia->id) : route('experiencias.store') }}"
                novalidate>
                @csrf

                @if (isset($experiencia))
                    @method('PUT')
                @endif


                <div class="row">
                    <div class="col-md-6 mb-4"> <!-- Destinos -->
                        <label for="destino" class="form-label text-muted small fw-bold">Destino</label>

                        <select class="form-select" name="destino_id" required>
                            <option value="">Seleccione un destino</option>
                            @foreach ($destinos as $destino)
                                <option value="{{ $destino->id }}"
                                    {{ old('destino_id', isset($experiencia) ? $experiencia->destino_id : '') == $destino->id ? 'selected' : '' }}>
                                    {{ $destino->nombre }}
                                </option>
                            @endforeach
                        </select>

                        @if ($errors->has('destino_id'))
                            <p class="text-danger">{{ $errors->first('destino_id') }}</p>
                        @endif
                    </div>

                    <div class="col-md-6 mb-4"> <!-- autor -->
                        <label for="autor" class="form-label text-muted small fw-bold">Autor</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-house text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="autor"
                                placeholder="Ingrese el autor"
                                value="{{ old('autor', isset($experiencia) ? $experiencia->autor : '') }}" required>
                        </div>
                        @if ($errors->has('autor'))
                            <p class="text-danger">{{ $errors->first('autor') }}</p>
                        @endif
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-4"> <!-- fecha_publicacion -->
                        <label for="fecha_publicacion" class="form-label text-muted small fw-bold">Fecha publicacion</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-geo-alt text-muted"></i>
                            </span>
                            <input type="date" class="form-control border-start-0 ps-2" name="fecha_publicacion"
                                value="{{ old('fecha_publicacion', isset($experiencia) ? $experiencia->fecha_publicacion : '') }}" required>
                        </div>
                        @if ($errors->has('fecha_publicacion'))
                            <p class="text-danger">{{ $errors->first('fecha_publicacion') }}</p>
                        @endif
                    </div>

                    <div class="col-md-6 mb-4"> <!-- titulo -->
                        <label for="titulo" class="form-label text-muted small fw-bold">Título</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-cash-coin text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="titulo"
                                placeholder="Ingrese titulo"
                                value="{{ old('titulo', isset($experiencia) ? $experiencia->titulo : '') }}" required>
                        </div>
                        @if ($errors->has('titulo'))
                            <p class="text-danger">{{ $errors->first('titulo') }}</p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4"> <!-- subtitulo -->
                        <label for="subtitulo" class="form-label text-muted small fw-bold">Subtítulo</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-currency-dollar text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="subtitulo"
                                placeholder="Ingrese subtítulo"
                                value="{{ old('subtitulo', isset($experiencia) ? $experiencia->subtitulo : '') }}" required>
                        </div>
                        @if ($errors->has('subtitulo'))
                            <p class="text-danger">{{ $errors->first('subtitulo') }}</p>
                        @endif
                    </div>

                    <div class="col-md-6 mb-4"> <!-- contenido -->
                        <label for="contenido" class="form-label text-muted small fw-bold">Contenido</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-currency-exchange text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="contenido"
                                placeholder="Ingrese el contenido de la experiencia"
                                value="{{ old('contenido', isset($experiencia) ? $experiencia->contenido : '') }}" required>
                        </div>
                        @if ($errors->has('contenido'))
                            <p class="text-danger">{{ $errors->first('contenido') }}</p>
                        @endif
                    </div>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary rounded-pill">
                        <i class="bi bi-{{ isset($experiencia) ? 'pencil' : 'plus-circle' }} me-2"></i>
                        {{ isset($experiencia) ? 'Editar Experiencia' : 'Crear Experiencia' }}
                    </button>
                </div>
            </form>
        </div>

        <div class="card-footer bg-light py-3 text-center">
            <a href="{{ route('experiencias.index') }}" class="text-decoration-none text-muted small">
                <i class="bi bi-arrow-left me-1"></i> Volver a la lista de experiencias
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
