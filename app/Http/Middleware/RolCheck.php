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
            return redirect()->route('login.form');
        }

        if ($usuario->rol === 'admin') { // admin tiene acceso completo
            return $next($request);
        }

        foreach ($roles as $rol) {  // ver si se tiene alguno de los roles permitidos
            if ($usuario->rol === $rol) {
                return $next($request);
            }
        }

        return redirect()->route('home')->with('msg', 'No tienes permisos para acceder a esta sección');
    }
}


