<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequisitoRequest;
use App\Models\Destino;
use App\Models\Nacionalidad;
use App\Models\Requisito;
use Illuminate\Http\Request;

class RequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requisitos = Requisito::all();
        return view('requisitos.index', compact('requisitos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $requisitos = Requisito::all();
        $destinos = Destino::all();
        $nacionalidades = Nacionalidad::all();
        return view('requisitos.create', compact('requisitos', 'destinos', 'nacionalidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequisitoRequest $request)
    {
        $requisito = new Requisito();
        $requisito->requisito = $request->requisito;
        $requisito->save();

        $msg = "Su requisito fue creado con éxito!";
        return redirect()->route('requisitos.index')->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $requisito = Requisito::findOrFail($id);
        return view('requisitos.show', compact('requisito'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $requisito = Requisito::findOrFail($id);
        $destinos = Destino::all();
        $nacionalidades = Nacionalidad::all();
        return view('requisitos.create', compact('requisito', 'destinos', 'nacionalidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequisitoRequest $request, string $id)
    {
        $requisito = Requisito::findOrFail($id);
        $requisito->requisito = $request->requisito;

        $requisito->update();

        $msg = "Su requisito fue editado con éxito!";
        return redirect()->route('requisitos.index')->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $requisito = Requisito::findOrFail($id);
        $requisito->delete();
        $msg = "Requisito con ID: $id eliminado con éxito!";
        return redirect()->route('requisitos.index')->with('msg', $msg);
    }
}
