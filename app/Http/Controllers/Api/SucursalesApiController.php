<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalesApiController extends Controller
{
     public function index()
    {
        $sucursales = Sucursal::all();
        return response()->json($sucursales);
    }

     public function show(string $id)
    {
        $sucursal = Sucursal::findOrFail($id);
        return response()->json($sucursal);
    }
}
