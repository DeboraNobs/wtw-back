<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function verLoginForm() {
        return view('login');
    }

    public function login(Request $request) {
    $credenciales = $request->only(['email', 'password']);

    if (Auth::attempt($credenciales)) {
        $usuario = Auth::user();

        // dd(Auth::user());

        if ($usuario->rol === 'admin') {
            $request->session()->regenerate();
            return redirect()->intended(route('usuarios.index'));
        } else if ($usuario->rol === 'usuario') {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        } else {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            $msg = 'Acceso no autorizado para este usuario.';
            return redirect()->route('login.form')->with('msg', $msg);
        }
    } else {
        $msg = 'Credenciales inválidas, por favor inténtelo de nuevo.';
        return redirect()->route('login.form')->with('msg', $msg);
    }
}


    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
