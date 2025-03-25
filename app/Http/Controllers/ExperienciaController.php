<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienciaRequest;
use App\Models\Destino;
use App\Models\Experiencia;
use Illuminate\Http\Request;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiencias = Experiencia::all();
        return view('experiencias.index', compact('experiencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinos = Destino::all();
        return view('experiencias.create', compact('destinos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienciaRequest $request)
    {
        $experiencia = new Experiencia();
        $experiencia->fecha_publicacion = $request->fecha_publicacion;
        $experiencia->titulo = $request->titulo;
        $experiencia->subtitulo = $request->subtitulo;
        $experiencia->contenido = $request->contenido;
        $experiencia->autor = $request->autor;

        $experiencia->destino_id = $request->destino_id;
        $experiencia->save();

        $msg = "Experiencia $request->titulo creada con éxito!";
        return redirect()->route('experiencias.index')->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $experiencia = Experiencia::findOrFail($id);
        return view('experiencias.show', compact('experiencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $experiencia = Experiencia::findOrFail($id);
        $destinos = Destino::all();
        return view('experiencias.create', compact('experiencia', 'destinos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienciaRequest $request, string $id)
    {
        $experiencia = Experiencia::findOrFail($id);
        $experiencia->fecha_publicacion = $request->fecha_publicacion;
        $experiencia->titulo = $request->titulo;
        $experiencia->subtitulo = $request->subtitulo;
        $experiencia->contenido = $request->contenido;
        $experiencia->autor = $request->autor;
        $experiencia->destino_id = $request->destino_id;

        $experiencia->update();

        $msg = "Experiencia $request->titulo editado con éxito!";
        return redirect()->route('experiencias.index')->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experiencia = Experiencia::findOrFail($id);
        $experiencia->delete();
        $msg = "Experiencia con ID: $id, con nombre $experiencia->titulo eliminada con éxito!";
        return redirect()->route('experiencias.index')->with('msg', $msg);
    }
}
