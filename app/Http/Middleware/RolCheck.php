<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $usuario = $request->user();

        if (!$usuario) {
            return redirect()->route('login.form'); // Mejor redirigir que responder JSON
        }

        // Admin tiene acceso completo
        if ($usuario->rol === 'admin') {
            return $next($request);
        }

        // Verificar si el usuario tiene alguno de los roles permitidos
        foreach ($roles as $rol) {
            if ($usuario->rol === $rol) {
                return $next($request);
            }
        }

        return redirect()->route('home')->with('error', 'No tienes permisos para acceder a esta sección');

        // return response()->json(['error' => 'Acceso no autorizado'], 403);
    }
}


