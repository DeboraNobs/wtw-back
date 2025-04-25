<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequisitoRequest;
use App\Models\Destino;
use App\Models\Nacionalidad;
use App\Models\Requisito;
use Illuminate\Support\Facades\DB;

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

        if ($request->has('combinaciones')) {
            foreach ($request->combinaciones as $combinacion) {

                [$destino_id, $nacionalidad_id] = explode('-', $combinacion); // la combinación venga como "destino_id-nacionalidad_id"


                $dn = DB::table('destino_nacionalidad') // busco el id en destino_nacionalidad
                    ->where('destino_id', $destino_id)
                    ->where('nacionalidad_id', $nacionalidad_id)
                    ->first();

                if ($dn) {
                    DB::table('destino_nacionalidad_requisitos')->insert([
                        'destino_nacionalidad_id' => $dn->id,
                        'requisito_id' => $requisito->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        $msg = "Su requisito fue creado con éxito!";
        return redirect()->route('requisitos.index')->with('msg', $msg);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $requisito = Requisito::findOrFail($id);

        // traer combinaciones destino + nacionalidad que contienen este requisito
        $combinaciones = DB::table('destino_nacionalidad_requisitos as dnr')
            ->join('destino_nacionalidad as dn', 'dn.id', '=', 'dnr.destino_nacionalidad_id')
            ->join('destinos as d', 'd.id', '=', 'dn.destino_id')
            ->join('nacionalidades as n', 'n.id', '=', 'dn.nacionalidad_id')
            ->where('dnr.requisito_id', $id)
            ->select('d.nombre as destino', 'n.nacionalidad as nacionalidad')
            ->get()
            ->groupBy('nacionalidad');

        return view('requisitos.show', compact('requisito', 'combinaciones'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $requisito = Requisito::findOrFail($id);
        $destinos = Destino::all();
        $nacionalidades = Nacionalidad::all();

        $seleccionadas = DB::table('destino_nacionalidad_requisitos as dnr')
            ->join('destino_nacionalidad as dn', 'dn.id', '=', 'dnr.destino_nacionalidad_id')
            ->where('dnr.requisito_id', $id)
            ->select(DB::raw('CONCAT(dn.destino_id, "-", dn.nacionalidad_id) as combinacion'))
            ->pluck('combinacion')
            ->toArray();

        return view('requisitos.create', compact('requisito', 'destinos', 'nacionalidades', 'seleccionadas'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(RequisitoRequest $request, string $id)
    {
        $requisito = Requisito::findOrFail($id);
        $requisito->requisito = $request->requisito;
        $requisito->save();

        DB::table('destino_nacionalidad_requisitos')->where('requisito_id', $id)->delete();  // limpio las combinaciones anteriores

        if ($request->has('combinaciones')) {
            foreach ($request->combinaciones as $combinacion) {
                [$destino_id, $nacionalidad_id] = explode('-', $combinacion); // la combinación venga como "destino_id-nacionalidad_id"

                $dn = DB::table('destino_nacionalidad')    // busco el destino_nacionalidad_id
                    ->where('destino_id', $destino_id)
                    ->where('nacionalidad_id', $nacionalidad_id)
                    ->first();

                if ($dn) {
                    DB::table('destino_nacionalidad_requisitos')->insert([
                        'destino_nacionalidad_id' => $dn->id,
                        'requisito_id' => $requisito->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

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
