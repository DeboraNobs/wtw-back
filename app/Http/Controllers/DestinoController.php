<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestinoRequest;
use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinos = Destino::all();
        return view('destinos.index', compact('destinos'))
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DestinoRequest $request)
    {
        $destino = new Destino();
        $destino->nombre = $request->nombre;
        $destino->moneda = $request->moneda;
        $destino->salario_minimo = $request->salario_minimo;
        $destino->salario_promedio = $request->salario_promedio;
        $destino->costo_vida_promedio = $request->costo_vida_promedio;
        $destino->dificultad_visa = $request->dificultad_visa;
        $destino->aplica_exterior = $request->aplica_exterior;
        $destino->requiere_estudios = $request->requiere_estudios;
        $destino->requiere_idiomas = $request->requiere_idiomas;
        // agregar si falta uno (porque descubri que en mi tabla esta repetido require_idiomas)
        $destino->save();

        $msg = "Destino $request->nombre creado con éxito!";
        return redirect()->route('destinos.index')->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destino = Destino::firstWhere('id', '=', $id);
        return view('destinos.show', compact('destino'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destino = Destino::findOrFail($id);
        return view('destinos.show', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DestinoRequest $request, string $id)
    {

        $destino = Destino::findOrFail($id);
        $destino->nombre = $request->nombre;
        $destino->moneda = $request->moneda;
        $destino->salario_minimo = $request->salario_minimo;
        $destino->salario_promedio = $request->salario_promedio;
        $destino->costo_vida_promedio = $request->costo_vida_promedio;
        $destino->dificultad_visa = $request->dificultad_visa;
        $destino->aplica_exterior = $request->aplica_exterior;
        $destino->requiere_estudios = $request->requiere_estudios;
        $destino->requiere_idiomas = $request->requiere_idiomas;
        // agregar si falta uno (porque descubri que en mi tabla esta repetido require_idiomas)
        $destino->update();


        $msg = "Destino $request->nombre editado con éxito!";       
        return redirect()->route('destinos.index')->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destino = Destino::findOrFail($id);
        $destino->delete();
        $msg = "Destino con ID: $id, con nombre $destino->nombre eliminado con éxito!";
        return redirect()->route('destinos.index')->with('msg', $msg);
    }
    
}
