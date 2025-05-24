<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\Models\Usuario;

class RegistroApiController extends Controller
{
    public function store(UsuarioRequest $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->rol = $request->rol ?? 'usuario';
        $usuario->password = bcrypt($request->password);
        $usuario->fecha_registro = $request->fecha_registro;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->nacionalidad_id = $request->nacionalidad_id;
        $usuario->save();

        return response()->json([
            'message' => 'Usuario registrado correctamente',
            'usuario' => $usuario
        ], 201);
    }
}
