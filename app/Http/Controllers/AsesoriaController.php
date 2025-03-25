<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsesoriaRequest;
use App\Models\Asesoria;
use App\Models\Destino;
use App\Models\Nacionalidad;
use App\Models\Usuario;
use Illuminate\Http\Request;

class AsesoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asesorias = Asesoria::all();
        return view('asesorias.index', compact('asesorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asesorias = Asesoria::all();
        $destinos = Destino::all();
        $nacionalidades = Nacionalidad::all();

        return view('asesorias.create', compact('asesorias', 'destinos', 'nacionalidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsesoriaRequest $request)
    {
        $asesoria = new Asesoria();
        $asesoria->descripcion = $request->descripcion;
        $asesoria->fecha_solicitud = $request->fecha_solicitud;
        $asesoria->quiere_postulacion = $request->quiere_postulacion;
        $asesoria->quiere_seguro = $request->quiere_seguro;
        $asesoria->quiere_asistencia_ilimitada = $request->quiere_asistencia_ilimitada;
        // $asesoria->usuario_id = $request->usuario_id;
        $asesoria->nacionalidad_id = $request->nacionalidad_id;
        $asesoria->destino_id = $request->destino_id;
        $asesoria->save();

        $msg = "Su asesoria fue creada con éxito!";
        return redirect()->route('asesorias.index')->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $asesoria = Asesoria::findOrFail($id);
        return view('asesorias.show', compact('asesoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $asesoria = Asesoria::findOrFail($id);
        $destinos = Destino::all();
        $asesorias = Asesoria::all();
        $nacionalidades = Nacionalidad::all();

        return view('asesorias.create', compact('asesoria', 'destinos', 'asesorias', 'nacionalidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsesoriaRequest $request, string $id)
    {
        $asesoria = Asesoria::findOrFail($id);
        $asesoria->descripcion = $request->descripcion;
        $asesoria->fecha_solicitud = $request->fecha_solicitud;
        $asesoria->estado = $request->estado;
        $asesoria->quiere_postulacion = $request->quiere_postulacion;
        $asesoria->quiere_seguro = $request->quiere_seguro;
        $asesoria->quiere_asistencia_ilimitada = $request->quiere_asistencia_ilimitada;
        $asesoria->usuario_id = $request->usuario_id;
        $asesoria->nacionalidad_id = $request->nacionalidad_id;
        $asesoria->destino_id = $request->destino_id;

        $asesoria->update();


        $msg = "Asesoría $request->id editada con éxito!";
        return redirect()->route('asesorias.index')->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asesoria = Asesoria::findOrFail($id);
        $asesoria->delete();
        $msg = "Asesoría con ID: $id, a nombre de {$asesoria->usuario} eliminada con éxito!";
        return redirect()->route('asesorias.index')->with('msg', $msg);
    }
}
