@extends('template')

@section('tituloNavegador', 'Destinos')

@section('contenido')
    <div class="container py-3">

        <div class="card shadow-sm border-0 rounded-4 overflow-hidden mb-3">
            <div class="card-header bg-gradient-primary text-white py-3">
                <h2 class="mb-0 text-center fw-light">Gestión de Destinos</h2>
            </div>
        </div>

        @if (session('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
            <div class="card-header bg-light py-3">
                <h4 class="mb-0 text-center fw-light">Listado de Destinos</h4>
            </div>

            @if (auth()->user()->rol === 'admin')
                <a href="{{ route('destinos.create') }}" class="btn btn-outline-primary btn-lgrounded-pill">
                    <i class="bi bi-plus-circle me-2"></i> Crear Destino
                </a>
            @endif

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="text-start">Nombre</th>
                                <th class="text-start">Salario Mínimo</th>
                                <th class="text-start">Salario Promedio</th>
                                <th class="text-start">Costo de Vida</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($destinos as $destino)
                                <tr>
                                    <td class="text-start">{{ $destino->nombre }}</td>
                                    <td class="text-start">{{ $destino->salario_minimo }}</td>
                                    <td class="text-start">{{ $destino->salario_promedio }}</td>
                                    <td class="text-start">{{ $destino->costo_vida_promedio }}</td>

                                    <td>
                                        <div class="d-flex justify-content-center">

                                            <a href="{{ route('destinos.show', $destino->id) }}"
                                                class="btn btn-sm btn-outline-info me-2 rounded-pill">
                                                <i class="bi bi-eye"></i> Ver
                                            </a>

                                            @if (auth()->user()->rol === 'admin')
                                                <a href="{{ route('destinos.edit', $destino->id) }}"
                                                    class="btn btn-sm btn-primary me-2 rounded-pill">
                                                    <i class="bi bi-pencil-square"></i> Editar
                                                </a>

                                                <form method="POST" action="{{ route('destinos.destroy', $destino->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm btn-outline-danger rounded-pill delete-btn">
                                                        <i class="bi bi-trash"></i> Eliminar
                                                    </button>
                                                </form>
                                            @endif

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/funciones.js') }}"></script>

@endsection
