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
                <form method="POST"
                    action="{{ isset($destino) ? route('destinos.update', $destino->id) : route('destinos.store') }}"
                    novalidate>
                    @csrf

                    @if (isset($destino))
                        @method('PUT')
                    @endif

                    <div class="row">
                        <div class="col-md-6 mb-4"> <!-- nombre -->
                            <label for="nombre" class="form-label text-muted small fw-bold">Nombre</label>

                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2" name="nombre"
                                    placeholder="Ingrese un nombre" value="{{ isset($destino) ? $destino->nombre : '' }}"
                                    required>
                            </div>

                            @if ($errors->has('nombre'))
                                <p class="text-danger">{{ $errors->first('nombre') }}</p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-4"> <!-- moneda -->
                            <label for="moneda" class="form-label text-muted small fw-bold">Moneda</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2" name="moneda"
                                    placeholder="Ingrese moneda destino" value="{{ isset($destino) ? $destino->moneda : '' }}"
                                    required>
                            </div>

                            @if ($errors->has('moneda'))
                                <p class="text-danger">{{ $errors->first('moneda') }}</p>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-4"> <!-- salario_minimo -->
                            <label for="salario_minimo" class="form-label text-muted small fw-bold">Salario minimo</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2" name="salario_minimo"
                                    placeholder="Ingrese el salario minimo" value="{{ isset($destino) ? $destino->salario_minimo : '' }}"
                                    required>
                            </div>
                            @if ($errors->has('salario_minimo'))
                                <p class="text-danger">{{ $errors->first('salario_minimo') }}</p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-4"> <!-- salario_promedio -->
                            <label for="salario_promedio" class="form-label text-muted small fw-bold">Salario promedio</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2" name="salario_promedio"
                                    placeholder="Ingrese el salario promedio" value="{{ isset($destino) ? $destino->salario_promedio : '' }}"
                                    required>
                            </div>
                            @if ($errors->has('salario_promedio'))
                                <p class="text-danger">{{ $errors->first('salario_promedio') }}</p>
                            @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4"> <!-- costo_vida_promedio -->
                            <label for="costo_vida_promedio" class="form-label text-muted small fw-bold">Costo vida promedio</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2" name="costo_vida_promedio"
                                    placeholder="Ingrese un costo de vida promedio"
                                    value="{{ old('costo_vida_promedio', $usuario->costo_vida_promedio ?? '') }}" required>
                            </div>

                            @if ($errors->has('costo_vida_promedio'))
                                <p class="text-danger">{{ $errors->first('costo_vida_promedio') }}</p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-4"> <!-- dificultad_visa -->
                            <label for="dificultad_visa" class="form-label text-muted small fw-bold">Dificultad visa</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person-badge text-muted"></i>
                                </span>
                                <select class="form-control border-start-0 ps-2" name="dificultad_visa" required>
                                    <option value="" selected disabled>Seleccione la dificultad de la visa</option>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}" {{ old('dificultad_visa', $usuario->dificultad_visa ?? '') == $i ? 'selected' : '' }}>
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

                    <fieldset> <!-- aplica_exterior -->
                        <legend>Posibilidad de aplicar desde exterior:</legend>
                        <div>
                            <input type="checkbox" name="aplica_exterior" checked />
                            <label for="si">Si</label>
                        </div>

                        <div>
                            <input type="checkbox" name="aplica_exterior" />
                            <label for="no">No</label>
                        </div>
                    </fieldset>


                    <fieldset> <!-- requiere_estudios -->
                        <legend>Requiere estudios:</legend>
                        <div>
                            <input type="checkbox" name="requiere_estudios" checked />
                            <label for="si">Si</label>
                        </div>

                        <div>
                            <input type="checkbox" name="requiere_estudios" />
                            <label for="no">No</label>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Requiere idiomas:</legend>
                        <div>
                            <input type="checkbox" name="requiere_idiomas" checked />
                            <label for="si">Si</label>
                        </div>

                        <div>
                            <input type="checkbox" name="requiere_idiomas" />
                            <label for="no">No</label>
                        </div>
                    </fieldset>


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
