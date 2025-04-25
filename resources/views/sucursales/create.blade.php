@extends('template')

@section('tituloNavegador', isset($sucursal) ? 'Editar Sucursal' : 'Crear Sucursal')

@section('contenido')
    <div class="container py-5">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden" style="max-width: 600px; margin: 0 auto;">

            <div class="card-header bg-gradient-primary text-white py-4">
                <h2 class="mb-0 text-center fw-light">
                    {{ isset($sucursal) ? 'Editar Sucursal' : 'Crear Sucursal' }}
                </h2>
            </div>

            <div class="card-body p-4">
                <form method="POST"
                    action="{{ isset($sucursal) ? route('sucursales.update', $sucursal->id) : route('sucursales.store') }}"
                    novalidate>
                    @csrf

                    @if (isset($sucursal))
                        @method('PUT')
                    @endif

                    <div class="row">
                        <div class="col-md-6 mb-4"> <!-- Nombre -->
                            <label for="nombre" class="form-label text-muted fw-bold">Nombre</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-building text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2" name="nombre"
                                    value="{{ isset($sucursal) ? $sucursal->nombre : '' }}" placeholder="Ingrese un nombre"
                                    required>
                            </div>

                            @if ($errors->has('nombre'))
                                <p class="text-danger">{{ $errors->first('nombre') }}</p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-4"> <!-- Direccion -->
                            <label for="direccion" class="form-label text-muted fw-bold">Direccion</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-house-door text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2" name="direccion"
                                    value="{{ isset($sucursal) ? $sucursal->direccion : '' }}"
                                    placeholder="Ingrese una dirección" required>
                            </div>
                            @if ($errors->has('direccion'))
                                <p class="text-danger">{{ $errors->first('direccion') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4"> <!-- Latitud -->
                            <label for="latitud" class="form-label text-muted fw-bold">Latitud</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-compass text-muted"></i>
                                </span>
                                <input type="number" step="any" class="form-control border-start-0 ps-2" name="latitud"
                                    value="{{ isset($sucursal) ? $sucursal->latitud : '' }}"
                                    placeholder="Ingrese una latitud" required>
                            </div>
                            @if ($errors->has('latitud'))
                                <p class="text-danger">{{ $errors->first('latitud') }}</p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-4"> <!-- Longitud -->
                            <label for="longitud" class="form-label text-muted fw-bold">Longitud</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-compass text-muted"></i>
                                </span>
                                <input type="number" step="any" class="form-control border-start-0 ps-2"
                                    name="longitud" value="{{ isset($sucursal) ? $sucursal->longitud : '' }}"
                                    placeholder="Ingrese una longitud" required>
                            </div>
                            @if ($errors->has('longitud'))
                                <p class="text-danger">{{ $errors->first('longitud') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4"> <!-- Email -->
                            <label for="email" class="form-label text-muted fw-bold">Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-envelope text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2" name="email"
                                    value="{{ isset($sucursal) ? $sucursal->email : '' }}" placeholder="Ingrese un email"
                                    required>
                            </div>
                            @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-4"> <!-- Año apertura -->
                            <label for="anio_apertura" class="form-label text-muted fw-bold">Año apertura</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-calendar text-muted"></i>
                                </span>
                                <input type="number" class="form-control border-start-0 ps-2" name="anio_apertura"
                                    value="{{ isset($sucursal) ? $sucursal->anio_apertura : '' }}"
                                    placeholder="Ingrese el año de apertura" required>
                            </div>
                            @if ($errors->has('anio_apertura'))
                                <p class="text-danger">{{ $errors->first('anio_apertura') }}</p>
                            @endif
                        </div>
                    </div>


                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-outline-primary rounded-pill">
                            <i class="bi bi-{{ isset($sucursal) ? 'pencil' : 'plus-circle' }} me-2"></i>
                            {{ isset($sucursal) ? 'Editar Sucursal' : 'Crear Sucursal' }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="card-footer bg-light py-3 text-center">
                <a href="{{ route('sucursales.index') }}" class="text-decoration-none text-muted">
                    <i class="bi bi-arrow-left me-1"></i> Volver a la lista de sucursales
                </a>
            </div>
        </div>
    </div>

@endsection
