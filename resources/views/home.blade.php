@extends('template')

@section('tituloNavegador', 'Inicio')

@section('contenido')
 <h2 class="text-center">Work The World</h2>
 <h3 class="text-center mt-4">Inicio</h3>
 <h4 class="text-center mt-4">Bienvenido {{Auth::user()->nombre ?? ''}}</h4>

 <div class="ms-2 mt-4 mb-4">
    <img src="{{ asset('images/principal.png') }}" class="rounded-5" alt="principal-home" style="width: 100%; height: auto; object-fit: cover;">
</div>

<div>
    <div class="fecha text-center"><i class="bi bi-calendar-week"></i> {{ fechaActual('d/m/Y') }} </div>
</div>
@endsection
