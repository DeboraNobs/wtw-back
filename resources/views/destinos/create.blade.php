@extends('template')

@section('tituloNavegador', 'Crear Destino')

@section('contenido')

<div class="container py-5">
    <div class="card shadow-sm border-0 rounded-4 overflow-hidden" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header bg-gradient-primary text-white py-4">
            <h2 class="mb-0 text-center fw-light">
                {{ isset($destino) ? 'Editar Destino' : 'Crear Destino' }}
            </h2>
        </div>

        <div class="card-body p-4">
            <form method="POST" action="{{ isset($destino) ? route('destinos.update', $destino->id) : route('destinos.store') }}"
                novalidate enctype="multipart/form-data">
                @csrf

                @if (isset($destino))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-6 mb-4"> <!-- nombre -->
                        <label for="nombre" class="form-label text-muted small fw-bold">Nombre</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-geo-alt text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="nombre"
                                placeholder="Ingrese un nombre"
                                value="{{ old('nombre', isset($destino) ? $destino->nombre : '') }}" required>
                        </div>
                        @if ($errors->has('nombre'))
                            <p class="text-danger">{{ $errors->first('nombre') }}</p>
                        @endif
                    </div>

                    <div class="col-md-6 mb-4"> <!-- moneda -->
                        <label for="moneda" class="form-label text-muted small fw-bold">Moneda</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-cash-coin text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="moneda"
                                placeholder="Ingrese moneda"
                                value="{{ old('moneda', isset($destino) ? $destino->moneda : '') }}" required>
                        </div>
                        @if ($errors->has('moneda'))
                            <p class="text-danger">{{ $errors->first('moneda') }}</p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4"> <!-- salario_minimo -->
                        <label for="salario_minimo" class="form-label text-muted small fw-bold">Salario mínimo</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-currency-dollar text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="salario_minimo"
                                placeholder="Ingrese el salario mínimo"
                                value="{{ old('salario_minimo', isset($destino) ? $destino->salario_minimo : '') }}" required>
                        </div>
                        @if ($errors->has('salario_minimo'))
                            <p class="text-danger">{{ $errors->first('salario_minimo') }}</p>
                        @endif
                    </div>

                    <div class="col-md-6 mb-4"> <!-- salario_promedio -->
                        <label for="salario_promedio" class="form-label text-muted small fw-bold">Salario promedio</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-currency-exchange text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="salario_promedio"
                                placeholder="Ingrese el salario promedio"
                                value="{{ old('salario_promedio', isset($destino) ? $destino->salario_promedio : '') }}" required>
                        </div>
                        @if ($errors->has('salario_promedio'))
                            <p class="text-danger">{{ $errors->first('salario_promedio') }}</p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4"> <!-- costo_vida_promedio -->
                        <label for="costo_vida_promedio" class="form-label text-muted small fw-bold">Costo de vida promedio</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-house text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="costo_vida_promedio"
                                placeholder="Ingrese un costo de vida"
                                value="{{ old('costo_vida_promedio', isset($destino) ? $destino->costo_vida_promedio : '') }}" required>
                        </div>
                        @if ($errors->has('costo_vida_promedio'))
                            <p class="text-danger">{{ $errors->first('costo_vida_promedio') }}</p>
                        @endif
                    </div>

                    <div class="col-md-6 mb-4"> <!-- dificultad_visa -->
                        <label for="dificultad_visa" class="form-label text-muted small fw-bold">Dificultad de visa</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-passport text-muted"></i>
                            </span>
                            <select class="form-control border-start-0 ps-2" name="dificultad_visa" required>
                                <option value="" selected disabled>Seleccione la dificultad</option>
                                @for ($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}"
                                        {{ (old('dificultad_visa', isset($destino) ? $destino->dificultad_visa : '') == $i ? 'selected' : '') }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        @if ($errors->has('dificultad_visa'))
                            <p class="text-danger">{{ $errors->first('dificultad_visa') }}</p>
                        @endif
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 mb-4">
                        <label for="imagen" class="form-label text-muted small fw-bold">Imagen del destino</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-image text-muted"></i>
                            </span>
                            <input type="file" class="form-control border-start-0 ps-2" name="imagen" id="imagen">
                        </div>

                        @if(isset($destino->imagen))
                            <p class="text-muted small mt-2">Imagen actual: {{ $destino->imagen }}</p>
                        @endif

                        @if ($errors->has('imagen'))
                            <p class="text-danger">{{ $errors->first('imagen') }}</p>
                        @endif
                    </div>
                </div>


                <div class="row">
                    <!-- Aplica desde exterior -->
                    <div class="col-md-6 mb-4">
                        <fieldset>
                            <legend class="form-label text-muted small fw-bold">Aplicar desde exterior:</legend>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-globe text-muted"></i>
                                </span>
                                <div class="form-control border-start-0 ps-2 d-flex align-items-center">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="aplica_exterior"
                                            id="aplica_exterior_si" value="1"
                                            {{ old('aplica_exterior', $destino->aplica_exterior ?? '') == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="aplica_exterior_si">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="aplica_exterior"
                                            id="aplica_exterior_no" value="0"
                                            {{ old('aplica_exterior', $destino->aplica_exterior ?? '') == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="aplica_exterior_no">No</label>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('aplica_exterior'))
                                <p class="text-danger">{{ $errors->first('aplica_exterior') }}</p>
                            @endif
                        </fieldset>
                    </div>

                    <!-- Requiere estudios -->
                    <div class="col-md-6 mb-4">
                        <fieldset>
                            <legend class="form-label text-muted small fw-bold">Requiere estudios:</legend>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-book text-muted"></i>
                                </span>
                                <div class="form-control border-start-0 ps-2 d-flex align-items-center">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="requiere_estudios"
                                            id="requiere_estudios_si" value="1"
                                            {{ old('requiere_estudios', $destino->requiere_estudios ?? '') == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="requiere_estudios_si">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="requiere_estudios"
                                            id="requiere_estudios_no" value="0"
                                            {{ old('requiere_estudios', $destino->requiere_estudios ?? '') == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="requiere_estudios_no">No</label>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('requiere_estudios'))
                                <p class="text-danger">{{ $errors->first('requiere_estudios') }}</p>
                            @endif
                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <!-- Requiere idiomas -->
                    <div class="col-md-6 mb-4">
                        <fieldset>
                            <legend class="form-label text-muted small fw-bold">Requiere idiomas:</legend>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-translate text-muted"></i>
                                </span>
                                <div class="form-control border-start-0 ps-2 d-flex align-items-center">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="requiere_idiomas"
                                            id="requiere_idiomas_si" value="1"
                                            {{ old('requiere_idiomas', $destino->requiere_idiomas ?? '') == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="requiere_idiomas_si">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="requiere_idiomas"
                                            id="requiere_idiomas_no" value="0"
                                            {{ old('requiere_idiomas', $destino->requiere_idiomas ?? '') == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="requiere_idiomas_no">No</label>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('requiere_idiomas'))
                                <p class="text-danger">{{ $errors->first('requiere_idiomas') }}</p>
                            @endif
                        </fieldset>
                    </div>

                    <!-- Está disponible -->
                    <div class="col-md-6 mb-4">
                        <fieldset>
                            <legend class="form-label text-muted small fw-bold">Está disponible:</legend>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-check2-circle text-muted"></i>
                                </span>
                                <div class="form-control border-start-0 ps-2 d-flex align-items-center">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="esta_disponible"
                                            id="esta_disponible_si" value="1"
                                            {{ old('esta_disponible', $destino->esta_disponible ?? '') == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="esta_disponible_si">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="esta_disponible"
                                            id="esta_disponible_no" value="0"
                                            {{ old('esta_disponible', $destino->esta_disponible ?? '') == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="esta_disponible_no">No</label>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('esta_disponible'))
                                <p class="text-danger">{{ $errors->first('esta_disponible') }}</p>
                            @endif
                        </fieldset>
                    </div>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary rounded-pill">
                        <i class="bi bi-{{ isset($destino) ? 'pencil' : 'plus-circle' }} me-2"></i>
                        {{ isset($destino) ? 'Editar Destino' : 'Crear Destino' }}
                    </button>
                </div>
            </form>
        </div>

        <div class="card-footer bg-light py-3 text-center">
            <a href="{{ route('destinos.index') }}" class="text-decoration-none text-muted small">
                <i class="bi bi-arrow-left me-1"></i> Volver a la lista de destinos
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
