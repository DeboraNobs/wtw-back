<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestinoRequest;
use App\Models\Destino;
use Illuminate\Support\Facades\Storage;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinos = Destino::all();
        return view('destinos.index', compact('destinos'));
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
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('destinos', 'public'); // guarda la imagen en storage/app/public/destinos
        } else {
            $imagenPath = null; // si no se sube una imagen ingresa null
        }

        $destino = new Destino();
        $destino->nombre = $request->nombre;
        $destino->moneda = $request->moneda;
        $destino->salario_minimo = $request->salario_minimo;
        $destino->salario_promedio = $request->salario_promedio;
        $destino->costo_vida_promedio = $request->costo_vida_promedio;
        $destino->dificultad_visa = $request->dificultad_visa;
        $destino->imagen = $imagenPath;

        $destino->aplica_exterior = $request->has('aplica_exterior') ? 1 : 0;
        $destino->requiere_estudios = $request->has('requiere_estudios') ? 1 : 0;
        $destino->requiere_idiomas = $request->has('requiere_idiomas') ? 1 : 0;
        $destino->esta_disponible = $request->has('esta_disponible') ? 1 : 0;

        $destino->save();

        $msg = "Destino $request->nombre creado con éxito!";
        return redirect()->route('destinos.index')->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destino = Destino::findOrFail($id);
        return view('destinos.show', compact('destino'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destino = Destino::findOrFail($id);
        return view('destinos.create', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DestinoRequest $request, string $id)
    {
        $destino = Destino::findOrFail($id);

        if ($request->hasFile('imagen')) {
            if ($destino->imagen && Storage::disk('public')->exists($destino->imagen)) { // elimina la imagen anterior si existe
                Storage::disk('public')->delete($destino->imagen);
            }
            $imagenPath = $request->file('imagen')->store('destinos', 'public'); // guardar la nueva imagen
        } else {
            $imagenPath = $destino->imagen; // mantiene la imagen existente
        }

        $destino->nombre = $request->nombre;
        $destino->moneda = $request->moneda;
        $destino->salario_minimo = $request->salario_minimo;
        $destino->salario_promedio = $request->salario_promedio;
        $destino->costo_vida_promedio = $request->costo_vida_promedio;
        $destino->dificultad_visa = $request->dificultad_visa;
        $destino->aplica_exterior = $request->input('aplica_exterior', 0);
        $destino->requiere_estudios = $request->input('requiere_estudios', 0);
        $destino->requiere_idiomas = $request->input('requiere_idiomas', 0);
        $destino->esta_disponible = $request->input('esta_disponible', 0);
        $destino->imagen = $imagenPath;
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

