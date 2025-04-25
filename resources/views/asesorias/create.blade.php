@extends('template')

@section('tituloNavegador', isset($asesoria) ? 'Editar Asesoría' : 'Crear Asesoría')

@section('contenido')
    <div class="container py-5">

        <div class="card shadow-sm border-0 rounded-4 overflow-hidden" style="max-width: 600px; margin: 0 auto;">
            <div class="card-header bg-gradient-primary text-white py-4">
                <h2 class="mb-0 text-center fw-light">
                    {{ isset($asesoria) ? 'Editar Asesoría' : 'Crear Asesoría' }}
                </h2>
            </div>

            <div class="card-body p-4">
                <form method="POST"
                    action="{{ isset($asesoria) ? route('asesorias.update', $asesoria->id) : route('asesorias.store') }}"
                    novalidate>
                    @csrf
                    @if (isset($asesoria))
                        @method('PUT')
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Estado de la asesoría -->
                    @if (isset($asesoria))
                        <!-- Solo dejo editar el estado a la persona que edita, siempre que se cree una asesoría será pendiente -->
                        <div class="mb-4">
                            <label class="form-label text-muted fw-bold"> Estado </label>

                            <select class="form-control" name="estado" required>
                                <option value="">Selecciona el estado de la asesoría</option>
                                <option value="Pendiente"
                                    {{ old('estado', $asesoria->estado) == 'Pendiente' ? 'selected' : '' }}>Pendiente
                                </option>
                                <option value="En_proceso"
                                    {{ old('estado', $asesoria->estado) == 'En_proceso' ? 'selected' : '' }}>En proceso
                                </option>
                                <option value="Finalizado"
                                    {{ old('estado', $asesoria->estado) == 'Finalizado' ? 'selected' : '' }}>Finalizado
                                </option>
                            </select>

                            @if ($errors->has('estado'))
                                <p class="text-danger">{{ $errors->first('estado') }}</p>
                            @endif
                        </div>
                    @endif


                    <div class="mb-4">
                        <label class="form-label text-muted fw-bold">Descripción</label>
                        <textarea class="form-control" name="descripcion" required>{{ old('descripcion', $asesoria->descripcion ?? '') }}</textarea>

                        @if ($errors->has('descripcion'))
                            <p class="text-danger">{{ $errors->first('descripcion') }}</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-muted fw-bold">Fecha de Solicitud</label>
                        <input type="date" class="form-control" name="fecha_solicitud"
                            value="{{ old('fecha_solicitud', $asesoria->fecha_solicitud ?? '') }}" required>

                        @if ($errors->has('fecha_solicitud'))
                            <p class="text-danger">{{ $errors->first('fecha_solicitud') }}</p>
                        @endif
                    </div>

                    <!-- Nacionalidades -->
                    <div class="mb-4">
                        <label class="form-label text-muted fw-bold"> Nacionalidad </label>

                        <select class="form-control" name="nacionalidad_id" required>
                            <option value="">Selecciona una nacionalidad</option>
                            @foreach ($nacionalidades as $nacionalidad)
                                <option value="{{ $nacionalidad->id }}"
                                    {{ old('nacionalidad_id', $asesoria->nacionalidad_id ?? '') == $nacionalidad->id ? 'selected' : '' }}>
                                    {{ $nacionalidad->nacionalidad }}
                                </option>
                            @endforeach
                        </select>

                        @if ($errors->has('nacionalidad_id'))
                            <p class="text-danger">{{ $errors->first('nacionalidad_id') }}</p>
                        @endif
                    </div>


                    <div class="mb-4">
                        <label class="form-label text-muted fw-bold">Destino</label>

                        <select class="form-control" name="destino_id" required>
                            <option value="">Selecciona un destino</option>
                            @foreach ($destinos as $destino)
                                <option value="{{ $destino->id }}"
                                    {{ old('destino_id', $asesoria->destino_id ?? '') == $destino->id ? 'selected' : '' }}>
                                    {{ $destino->nombre }}
                                </option>
                            @endforeach
                        </select>

                        @if ($errors->has('destino_id'))
                            <p class="text-danger">{{ $errors->first('destino_id') }}</p>
                        @endif
                    </div>

                    <!-- ¿Quiere Postulación? -->
                    <div class="col-md-6 mb-4">
                        <fieldset>
                            <label class="form-label text-muted fw-bold">¿Quiere Postulación?</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-check-circle text-muted"></i>
                                </span>
                                <div class="form-control border-start-0 ps-2 d-flex align-items-center">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="quiere_postulacion"
                                            id="quiere_postulacion_si" value="1"
                                            {{ old('quiere_postulacion', $asesoria->quiere_postulacion ?? '') == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="quiere_postulacion_si">Sí</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="quiere_postulacion"
                                            id="quiere_postulacion_no" value="0"
                                            {{ old('quiere_postulacion', $asesoria->quiere_postulacion ?? '') == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="quiere_postulacion_no">No</label>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('quiere_postulacion'))
                                <p class="text-danger">{{ $errors->first('quiere_postulacion') }}</p>
                            @endif
                        </fieldset>
                    </div>

                    <!-- ¿Quiere Seguro? -->
                    <div class="col-md-6 mb-4">
                        <fieldset>
                            <label class="form-label text-muted fw-bold">¿Quiere Seguro?</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-shield-check text-muted"></i>
                                </span>
                                <div class="form-control border-start-0 ps-2 d-flex align-items-center">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="quiere_seguro"
                                            id="quiere_seguro_si" value="1"
                                            {{ old('quiere_seguro', $asesoria->quiere_seguro ?? '') == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="quiere_seguro_si">Sí</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="quiere_seguro"
                                            id="quiere_seguro_no" value="0"
                                            {{ old('quiere_seguro', $asesoria->quiere_seguro ?? '') == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="quiere_seguro_no">No</label>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('quiere_seguro'))
                                <p class="text-danger">{{ $errors->first('quiere_seguro') }}</p>
                            @endif
                        </fieldset>
                    </div>

                    <!-- ¿Quiere Asistencia Ilimitada? -->
                    <div class="col-md-6 mb-4">
                        <fieldset>
                            <label class="form-label text-muted fw-bold">¿Quiere Asistencia Ilimitada?</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person-check text-muted"></i>
                                </span>
                                <div class="form-control border-start-0 ps-2 d-flex align-items-center">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="quiere_asistencia_ilimitada"
                                            id="quiere_asistencia_si" value="1"
                                            {{ old('quiere_asistencia_ilimitada', $asesoria->quiere_asistencia_ilimitada ?? '') == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="quiere_asistencia_si">Sí</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="quiere_asistencia_ilimitada"
                                            id="quiere_asistencia_no" value="0"
                                            {{ old('quiere_asistencia_ilimitada', $asesoria->quiere_asistencia_ilimitada ?? '') == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="quiere_asistencia_no">No</label>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('quiere_asistencia_ilimitada'))
                                <p class="text-danger">{{ $errors->first('quiere_asistencia_ilimitada') }}</p>
                            @endif
                        </fieldset>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-outline-primary rounded-pill">
                            <i class="bi bi-{{ isset($asesoria) ? 'pencil' : 'plus-circle' }} me-2"></i>
                            {{ isset($asesoria) ? 'Editar Asesoría' : 'Crear Asesoría' }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="card-footer bg-light py-3 text-center">
                <a href="{{ route('asesorias.index') }}" class="text-decoration-none text-muted">
                    <i class="bi bi-arrow-left me-1"></i> Volver a la lista de asesorías
                </a>
            </div>
        </div>
    </div>
@endsection
