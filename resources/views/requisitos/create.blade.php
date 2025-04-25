@extends('template')

@section('tituloNavegador', isset($requisito) ? 'Editar Requisito' : 'Crear Requisito')

@section('contenido')
    <div class="container py-5">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden" style="max-width: 800px; margin: 0 auto;">

            <div class="card-header bg-gradient-primary text-white py-4">
                <h2 class="mb-0 text-center fw-light">
                    {{ isset($requisito) ? 'Editar Requisito' : 'Crear Requisito' }}
                </h2>
            </div>

            <div class="card-body p-4">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST"
                    action="{{ isset($requisito) ? route('requisitos.update', $requisito->id) : route('requisitos.store') }}"
                    novalidate>
                    @csrf

                    @if (isset($requisito))
                        @method('PUT')
                    @endif

                    <div class="mb-4">
                        <label for="requisito" class="form-label text-muted fw-bold">Requisito</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-flag text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="requisito"
                                value="{{ isset($requisito) ? $requisito->requisito : '' }}"
                                placeholder="Ingrese un requisito" required>
                        </div>
                        @if ($errors->has('requisito'))
                            <p class="text-danger">{{ $errors->first('requisito') }}</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-muted fw-bold mb-3">Asignar a destinos y nacionalidades:</label>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle text-center">
                                <thead class="table-light">

                                    <tr>
                                        <th rowspan="2" class="align-middle backcolor">Destinos</th>
                                        <th colspan="{{ count($nacionalidades) }}" class="text-center backcolor">
                                            Nacionalidades</th>
                                    </tr>

                                    <tr>
                                        @foreach ($nacionalidades as $nacionalidad)
                                            <th class="text-center backcolor">{{ $nacionalidad->nacionalidad }}</th>
                                        @endforeach
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($destinos as $destino)
                                        <tr>
                                            <td class="text-start fw-semibold backcolor">{{ $destino->nombre }}</td>
                                            @foreach ($nacionalidades as $nacionalidad)
                                                @php
                                                    $checked =
                                                        isset($seleccionadas) &&
                                                        in_array("{$destino->id}-{$nacionalidad->id}", $seleccionadas);
                                                @endphp
                                                <td class="backcolor-td">
                                                    <div class="form-check d-inline-block">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="combinaciones[]"
                                                            value="{{ $destino->id }}-{{ $nacionalidad->id }}"
                                                            id="combi-{{ $destino->id }}-{{ $nacionalidad->id }}"
                                                            {{ $checked ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="combi-{{ $destino->id }}-{{ $nacionalidad->id }}"></label>
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            @if ($errors->has('combinaciones'))
                                <p class="text-danger">{{ $errors->first('combinaciones') }}</p>
                            @endif

                        </div>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-outline-primary rounded-pill py-2">
                            <i class="bi bi-{{ isset($requisito) ? 'pencil' : 'plus-circle' }} me-2"></i>
                            {{ isset($requisito) ? 'Editar Requisito' : 'Crear Requisito' }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="card-footer bg-light py-3 text-center">
                <a href="{{ route('requisitos.index') }}" class="text-decoration-none text-muted">
                    <i class="bi bi-arrow-left me-1"></i> Volver a la lista de requisitos
                </a>
            </div>
        </div>
    </div>

@endsection





{{-- @extends('template')

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

                    @if (isset($requisito))
                        @method('PUT')
                    @endif

                    <div class="mb-4">
                        <label for="requisito" class="form-label text-muted fw-bold">Requisito</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-flag text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-2" name="requisito"
                                value="{{ isset($requisito) ? $requisito->requisito : '' }}"
                                placeholder="Ingrese un requisito" required>
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese una requisito válido.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="combinaciones" class="form-label text-muted fw-bold">Asignar a destinos y nacionalidades:</label>
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm align-middle text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th>Destino \ Nacionalidad</th>
                                        @foreach ($nacionalidades as $nacionalidad)
                                            <th>{{ $nacionalidad->nacionalidad }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($destinos as $destino)
                                        <tr>
                                            <th class="text-start">{{ $destino->nombre }}</th>
                                            @foreach ($nacionalidades as $nacionalidad)
                                                @php
                                                    $checked = isset($seleccionadas) && in_array("{$destino->id}-{$nacionalidad->id}", $seleccionadas);
                                                @endphp
                                                <td>
                                                    <input type="checkbox"
                                                        name="combinaciones[]"
                                                        value="{{ $destino->id }}-{{ $nacionalidad->id }}"
                                                        {{ $checked ? 'checked' : '' }}>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                <a href="{{ route('requisitos.index') }}" class="text-decoration-none text-muted">
                    <i class="bi bi-arrow-left me-1"></i> Volver a la lista de requisitos
                </a>
            </div>
        </div>
    </div>
@endsection --}}
