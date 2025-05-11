<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DestinoRequest;
use App\Models\Destino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinosApiController extends Controller
{
    public function index()
    {
        $destinos = Destino::all();
        return response()->json($destinos);
    }

    public function store(DestinoRequest $request)
    {
        $imagenPath = $request->hasFile('imagen')
            ? $request->file('imagen')->store('destinos', 'public')
            : null;

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

        return response()->json(['message' => 'Destino creado con éxito', 'destino' => $destino], 201);
    }

    public function show(string $id)
    {
        $destino = Destino::findOrFail($id);
        return response()->json($destino);
    }

    public function update(DestinoRequest $request, string $id)
    {
        $destino = Destino::findOrFail($id);

        if ($request->hasFile('imagen')) {
            if ($destino->imagen && Storage::disk('public')->exists($destino->imagen)) {
                Storage::disk('public')->delete($destino->imagen);
            }
            $imagenPath = $request->file('imagen')->store('destinos', 'public');
        } else {
            $imagenPath = $destino->imagen;
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

        return response()->json(['message' => 'Destino actualizado con éxito', 'destino' => $destino]);
    }

    public function destroy(string $id)
    {
        $destino = Destino::findOrFail($id);

        if ($destino->imagen && Storage::disk('public')->exists($destino->imagen)) {
            Storage::disk('public')->delete($destino->imagen);
        }

        $destino->delete();

        return response()->json(['message' => "Destino '$destino->nombre' eliminado con éxito"]);
    }
}
