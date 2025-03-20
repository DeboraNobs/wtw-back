<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

        $msg = "Usuario $request->nombre $request->apellidos creado con éxito!";
        return redirect()->route('usuarios.index')->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuario::firstWhere('id', '=', $id);
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.create', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
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

        $msg = "Usuario $request->nombre $request->apellidos editado con éxito!";
        return redirect()->route('usuarios.index')->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        $msg = "Usuario con ID: $id, con nombre $usuario->nombre $usuario->apellidos eliminado con éxito!";
        return redirect()->route('usuarios.index')->with('msg', $msg);
    }
}
