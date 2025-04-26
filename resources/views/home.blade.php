@extends('template')

@section('tituloNavegador', 'Inicio')

@section('contenido')
 <h2 class="text-center">Bienvenido</h2> <!-- (nombre) -->
 <h3 class="text-center mt-4">Panel de Administrador</h3>

 <div class="ms-2 mt-4 mb-4">
    <img src="{{ asset('images/principal.png') }}" alt="principal-home" style="width: 100%; height: auto; object-fit: cover;">
</div>

<div>
    <div class="fecha text-center"><i class="bi bi-calendar-week"></i> {{ fechaActual('d/m/Y') }} </div>
</div>
@endsection
