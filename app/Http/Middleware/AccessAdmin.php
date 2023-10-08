<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica si el usuario está autenticado
        if (!auth()->check()) {
            return response()->json(['message' => 'No autorizado'], 401);
        }

        // Verifica si el usuario tiene el userType "admin"
        if (auth()->user()->userType !== 'admin') {
            return response()->json(['message' => 'No tienes permiso de administrador'], 403);
        }

        return $next($request);
    }
}
