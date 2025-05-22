<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Rutas que deben excluirse de la verificación CSRF.
     *
     * @var array<int, string>
     */
    protected $except = [
        'api/*', // Excluye todas las rutas que empiecen con /api/
    ];
}
