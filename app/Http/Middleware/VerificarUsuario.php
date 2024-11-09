<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarUsuario
{
    /**
     * Maneja una solicitud entrante.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verificar si el usuario está autenticado (esto puede ser ajustado según tus necesidades)
        if (!$request->session()->has('usuario')) {
            // Si no está autenticado, redirigir a la página de inicio de sesión con un mensaje de error
            return redirect()->route('form')->withErrors(['error' => 'Debes iniciar sesión para acceder a esta página.']);
        }

        // Si el usuario está autenticado, continuar con la solicitud
        return $next($request);
    }
}
