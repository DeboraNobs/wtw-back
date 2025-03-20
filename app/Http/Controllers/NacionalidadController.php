<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nacionalidad;

class NacionalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nacionalidades = Nacionalidad::all();
        return view('nacionalidades.index', compact('nacionalidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nacionalidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nacionalidad = new Nacionalidad();
        $nacionalidad->nacionalidad = $request->nacionalidad;
        $nacionalidad->save();

        $msg = "Nacionalidad $nacionalidad->nacionalidad creado con éxito!";
        return redirect()->route('nacionalidades.index')->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // se pueden mostrar los usuarios que poseen dicha nacionalidad
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nacionalidad = Nacionalidad::findOrFail($id);
        return view('nacionalidades.create', compact('nacionalidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nacionalidad = Nacionalidad::findOrFail($id);
        $nacionalidad->nacionalidad = $request->nacionalidad;
        $nacionalidad->update();

        $msg = "Nacionalidad $request->nacionalidad editado con éxito!";
        return redirect()->route('nacionalidades.index')->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nacionalidad = Nacionalidad::findOrFail($id);
        $nacionalidad->delete();
        $msg = "Nacionalidad $nacionalidad->nacionalidad con ID: $id eliminada con éxito!";
        return redirect()->route('nacionalidades.index')->with('msg', $msg);
    }
}
