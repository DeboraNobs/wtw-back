@extends('template')

@section('tituloNavegador', 'Requisitos')

@section('contenido')
    <div class="container py-3">

        <div class="card shadow-sm border-0 rounded-4 overflow-hidden mb-3">
            <div class="card-header bg-gradient-primary text-white py-3">
                <h2 class="mb-0 text-center fw-light">Gestión de Requisitos</h2>
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
                <h4 class="mb-0 text-center fw-light">Listado de Requisitos</h4>
            </div>

            <a href="{{ route('requisitos.create') }}" class="btn btn-outline-primary btn-lgrounded-pill">
                <i class="bi bi-plus-circle me-2"></i> Crear Requisito
            </a>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="text-start ps-4">ID</th>
                                <th class="text-start">Requisito</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requisitos as $requisito)
                                <tr>
                                    <td class="text-start ps-4">{{ $requisito->id }}</td>
                                    <td class="text-start">{{ $requisito->requisito }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">

                                            <a href="{{ route('requisitos.show', $requisito->id) }}"
                                                class="btn btn-sm btn-outline-info me-2 rounded-pill">
                                                <i class="bi bi-eye"></i> Ver
                                            </a>

                                            <a href="{{ route('requisitos.edit', $requisito->id) }}"
                                                class="btn btn-sm btn-primary me-2 rounded-pill">
                                                <i class="bi bi-pencil-square"></i> Editar
                                            </a>

                                            <form method="POST"
                                                action="{{ route('requisitos.destroy', $requisito->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger rounded-pill delete-btn">
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

@endsection
