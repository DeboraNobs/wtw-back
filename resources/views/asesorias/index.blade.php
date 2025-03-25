@extends('template')

@section('tituloNavegador', 'Asesorias')

@section('contenido')
    <div class="container py-5">

        <div class="card shadow-sm border-0 rounded-4 overflow-hidden mb-4">
            <div class="card-header bg-gradient-primary text-white py-3">
                <h2 class="mb-0 text-center fw-light">Gestión de Asesorías</h2>
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
                <h4 class="mb-0 text-center fw-light">Listado de Asesorías</h4>
            </div>

            <a href="{{ route('asesorias.create') }}" class="btn btn-outline-primary btn-lgrounded-pill">
                <i class="bi bi-plus-circle me-2"></i> Crear Asesoría
            </a>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="text-start ps-4">ID</th>
                                <th class="text-start">Fecha solicitud</th>
                                <th class="text-start">Destino</th>
                                <th class="text-start">Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asesorias as $asesoria)
                                <tr>
                                    <td class="text-start ps-4">{{ $asesoria->id }}</td>
                                    <td class="text-start">{{ $asesoria->fecha_solicitud }}</td>
                                    <td class="text-start">{{ $asesoria->destino->nombre }}</td>
                                    <td class="text-start">{{ $asesoria->estado }}</td>

                                    <td>
                                        <div class="d-flex justify-content-center">

                                            <a href="{{ route('asesorias.show', $asesoria->id) }}"
                                                class="btn btn-sm btn-outline-info me-2 rounded-pill">
                                                <i class="bi bi-eye"></i> Ver
                                            </a>

                                            <a href="{{ route('asesorias.edit', $asesoria->id) }}"
                                                class="btn btn-sm btn-outline-primary me-2 rounded-pill">
                                                <i class="bi bi-pencil-square"></i> Editar
                                            </a>

                                            <form method="POST" action="{{ route('asesorias.destroy', $asesoria->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill delete-btn">
                                                    <i class="bi bi-trash"></i> Eliminar
                                                </button>
                                            </form>
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

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #6a11cb, #2365d7);
        }

        .table tbody tr:hover {
            background-color: rgba(106, 17, 203, 0.05);
        }

        .btn-outline-primary {
            border-color: #6a11cb;
            color: #6a11cb;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background-color: #6a11cb;
            color: #fff;
        }
    </style>
@endsection
