<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use App\Models\Nacionalidad;
use App\Models\Requisito;
use App\Models\Usuario;
use App\Http\Requests\UsuarioRequest;

class RegistroController extends Controller
{
    public function create()
    {
        $requisitos = Requisito::all();
        $destinos = Destino::all();
        $nacionalidades = Nacionalidad::all();
        return view('registro', compact('requisitos', 'destinos', 'nacionalidades'));
    }

    public function store(UsuarioRequest $request)
    {
        $existeUsuario = Usuario::where('email', $request->email)->first();

        if ($existeUsuario) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'El email ya está registrado');
        }

        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        // $usuario->rol = $request->rol;
        $usuario->rol = $request->rol ? $request->rol : 'usuario';
        $usuario->password = bcrypt($request->password);
        $usuario->fecha_registro = $request->fecha_registro;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->nacionalidad_id = $request->nacionalidad_id;
        $usuario->save();

        return redirect()->route('login.form')->with('success', $usuario->nombre);
    }
}
