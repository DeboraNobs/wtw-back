@extends('template')

@section('tituloNavegador', 'Crear Usuario')

@section('contenido')

    <div class="container py-5">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden" style="max-width: 600px; margin: 0 auto;">

            <div class="card-header bg-gradient-primary text-white py-4">
                <h2 class="mb-0 text-center fw-light">
                    {{ isset($usuario) ? 'Editar Usuario' : 'Crear Usuario' }}
                </h2>
            </div>

            <div class="card-body p-4">
                <form method="POST"
                    action="{{ isset($usuario) ? route('usuarios.update', $usuario->id) : route('usuarios.store') }}"
                    novalidate>
                    @csrf

                    @if (isset($usuario))
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
                                    placeholder="Ingrese un nombre" value="{{ isset($usuario) ? $usuario->nombre : '' }}"
                                    required>
                            </div>

                            @if ($errors->has('nombre'))
                                <p class="text-danger">{{ $errors->first('nombre') }}</p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-4"> <!-- apellidos -->
                            <label for="apellidos" class="form-label text-muted small fw-bold">Apellidos</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2" name="apellidos"
                                    placeholder="Ingrese apellidos" value="{{ isset($usuario) ? $usuario->apellidos : '' }}"
                                    required>
                            </div>

                            @if ($errors->has('apellidos'))
                                <p class="text-danger">{{ $errors->first('apellidos') }}</p>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-4"> <!-- email -->
                            <label for="email" class="form-label text-muted small fw-bold">Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-2" name="email"
                                    placeholder="Ingrese un email" value="{{ isset($usuario) ? $usuario->email : '' }}"
                                    required>
                            </div>
                            @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-4"> <!-- rol -->
                            <label for="rol" class="form-label text-muted small fw-bold">Rol</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person-badge text-muted"></i>
                                </span>
                                <select class="form-control border-start-0 ps-2" name="rol" required>
                                    <option value="" selected disabled>Seleccione un rol</option>
                                    <option value="admin"
                                        {{ old('rol', $usuario->rol ?? '') == 'admin' ? 'selected' : '' }}>Administrador
                                    </option>
                                    <option value="usuario"
                                        {{ old('rol', $usuario->rol ?? '') == 'usuario' ? 'selected' : '' }}>Usuario
                                    </option>
                                </select>
                            </div>
                            @if ($errors->has('rol'))
                                <p class="text-danger">{{ $errors->first('rol') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4"> <!-- contraseña -->
                            <label for="password" class="form-label text-muted small fw-bold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person text-muted"></i>
                                </span>
                                <input type="password" class="form-control border-start-0 ps-2" name="password"
                                    placeholder="Ingrese una contraseña"
                                    value="{{ isset($usuario) ? $usuario->password : '' }}" required>
                            </div>

                            @if ($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-4"> <!-- fecha_nacimiento -->
                            <label for="fecha_nacimiento" class="form-label text-muted small fw-bold">Fecha
                                Nacimiento</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person-badge text-muted"></i>
                                </span>
                                <input type="date" class="form-control border-start-0 ps-2" name="fecha_nacimiento"
                                    placeholder="Ingrese una fecha de nacimiento"
                                    value="{{ isset($usuario) ? $usuario->fecha_nacimiento : '' }}" required>
                            </div>

                            @if ($errors->has('fecha_nacimiento'))
                                <p class="text-danger">{{ $errors->first('fecha_nacimiento') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 mb-4"> <!-- nacionalidad -->
                        <label for="nacionalidad_id" class="form-label text-muted small fw-bold">Nacionalidad</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-person-badge text-muted"></i>
                            </span>
                            <select class="form-control border-start-0 ps-2" name="nacionalidad_id" required>
                                <option value="" selected disabled>Seleccione su nacionalidad</option>
                                <option value="1"
                                    {{ old('rol', $usuario->nacionalidad_id ?? '') == '1' ? 'selected' : '' }}>Argentina
                                </option>
                                <option value="2"
                                    {{ old('rol', $usuario->nacionalidad_id ?? '') == '2' ? 'selected' : '' }}>Chile
                                </option>
                                <option value="3"
                                    {{ old('rol', $usuario->nacionalidad_id ?? '') == '3' ? 'selected' : '' }}>Uruguay
                                </option>
                                <option value="4"
                                    {{ old('rol', $usuario->nacionalidad_id ?? '') == '4' ? 'selected' : '' }}>España
                                </option>
                            </select>
                        </div>
                        @if ($errors->has('nacionalidad_id'))
                            <p class="text-danger">{{ $errors->first('nacionalidad_id') }}</p>
                        @endif
                    </div>

                    <input type="hidden" name="fecha_registro" value="{{ date('Y-m-d') }}">


                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary rounded-pill">
                            <i class="bi bi-{{ isset($usuario) ? 'pencil' : 'plus-circle' }} me-2"></i>
                            {{ isset($usuario) ? 'Editar Usuario' : 'Crear Usuario' }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="card-footer bg-light py-3 text-center">
                <a href="{{ route('usuarios.index') }}" class="text-decoration-none text-muted small">
                    <i class="bi bi-arrow-left me-1"></i> Volver a la lista de usuarios
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
