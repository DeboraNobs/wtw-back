<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinoNacionalidadRequisitoApiController extends Controller
{
    public function requisitosPorDestinoYNacionalidad($destinoId, $nacionalidadId)
    {
        $relacion = DB::table('destino_nacionalidad')
            ->where('destino_id', $destinoId)
            ->where('nacionalidad_id', $nacionalidadId)
            ->first();

        if (!$relacion) {
            return response()->json(['message' => 'No se encontró la combinación destino-nacionalidad.'], 404);
        }

        $requisitos = DB::table('destino_nacionalidad_requisitos as dnr')
            ->join('requisitos as r', 'r.id', '=', 'dnr.requisito_id')
            ->where('dnr.destino_nacionalidad_id', $relacion->id)
            ->select('r.id', 'r.requisito')
            ->get();

        return response()->json([
            'destino_id' => $destinoId,
            'nacionalidad_id' => $nacionalidadId,
            'requisitos' => $requisitos,
        ]);
    }
}
