@extends('template')

@section('tituloNavegador', 'Detalles del Requisitos')

@section('contenido')
    <div class="container py-3">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-gradient-primary text-white py-4 text-center">
                <h2 class="fw-light mb-1">Detalles del Requisito</h2>
                <h3 class="display-10 fw-semibold">{{ $requisito->requisito }}</h3>
            </div>

            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-5">
                    <h5 class="mb-3">Este requisito está asignado a las siguientes combinaciones:</h5>

                    @if ($combinaciones->isEmpty())
                        <i class="bi bi-inboxes-fill text-muted display-4"></i>
                        <p class="text-muted fs-5 mt-3">No hay destinos y nacionalidades asociadas a este requisito.</p>
                    @else
                        <div class="row justify-content-center g-4">
                            @foreach ($combinaciones as $nacionalidad => $destinos)
                                <div class="col-md-6 col-lg-5 animate__animated animate__fadeInUp"
                                    style="animation-delay: {{ $loop->index * 0.1 }}s">
                                    <div class="combo-card h-100 p-4 rounded-3 shadow-sm border-0">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-globe-americas fs-3 me-2" style="color:#40176b"></i>
                                            <h6 class="mb-0 fw-semibold" style="color:#40176b">Nacionalidad:
                                                {{ $nacionalidad }}
                                            </h6>
                                        </div>

                                        <div class="container">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-signpost-split me-2" style="color:#780dea"></i>
                                                <small class="text-uppercase text-muted fw-semibold">Destinos
                                                    asociados</small>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                @foreach ($destinos as $item)
                                                    <li
                                                        class="list-group-item border-0 px-0 py-2 d-flex align-items-center">
                                                        <i class="bi bi-geo-alt-fill me-2" style="color:#a780d1"></i>
                                                        {{ $item->destino }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <div class="d-flex justify-content-center gap-3">

                    <a href="{{ route('requisitos.index') }}" class="btn btn-outline-secondary rounded-pill">
                        <i class="bi bi-arrow-left"></i> Volver
                    </a>

                    @if (auth()->user()->rol === 'admin')
                        <a href="{{ route('requisitos.edit', $requisito->id) }}"
                            class="btn btn-outline-primary rounded-pill">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection
