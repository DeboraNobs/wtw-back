<?php

namespace App\Http\Controllers;

use App\Http\Requests\SucursalRequest;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sucursales = Sucursal::all();
        return view('sucursales.index', compact('sucursales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sucursales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SucursalRequest $request)
    {
        $sucursal = new Sucursal();
        $sucursal->nombre = $request->nombre;
        $sucursal->direccion = $request->direccion;
        $sucursal->latitud = $request->latitud;
        $sucursal->longitud = $request->longitud;
        $sucursal->email = $request->email;
        $sucursal->anio_apertura = $request->anio_apertura;

        $sucursal->save();

        $msg = "Sucursal $sucursal->nombre creada con éxito!";
        return redirect()->route('sucursales.index')->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sucursal = Sucursal::findOrFail($id);
        return view('sucursales.show', compact('sucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sucursal = Sucursal::findOrFail($id);
        return view('sucursales.create', compact('sucursal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SucursalRequest $request, string $id)
    {
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->nombre = $request->nombre;
        $sucursal->direccion = $request->direccion;
        $sucursal->latitud = $request->latitud;
        $sucursal->longitud = $request->longitud;
        $sucursal->email = $request->email;
        $sucursal->anio_apertura = $request->anio_apertura;

        $sucursal->save();

        $msg = "Sucursal $sucursal->nombre editada con éxito!";
        return redirect()->route('sucursales.index')->with('msg', $msg);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->delete();
        $msg = "Sucursal $sucursal->nombre con ID: $id eliminada con éxito!";
        return redirect()->route('sucursales.index')->with('msg', $msg);
    }
}
