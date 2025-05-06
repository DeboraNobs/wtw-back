<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\Models\Usuario;

class UsuarioApiController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    public function store(UsuarioRequest $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->rol = $request->rol;
        $usuario->password = bcrypt($request->password);
        $usuario->fecha_registro = $request->fecha_registro;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->nacionalidad_id = $request->nacionalidad_id;
        $usuario->save();

        return response()->json([
            'message' => 'Usuario creado con éxito',
            'usuario' => $usuario
        ], 201);
    }

    public function show(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return response()->json($usuario);
    }

    public function update(UsuarioRequest $request, string $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->rol = $request->rol;
        $usuario->password = bcrypt($request->password);
        $usuario->fecha_registro = $request->fecha_registro;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->nacionalidad_id = $request->nacionalidad_id;
        $usuario->update();

        return response()->json([
            'message' => 'Usuario actualizado con éxito',
            'usuario' => $usuario
        ]);
    }

    public function destroy(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return response()->json([
            'message' => "Usuario con ID: $id eliminado con éxito"
        ]);
    }
}
