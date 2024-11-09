<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\SeccionController;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next): Response

    { 
            if (Auth::check());{
                        return $next($request);

            }
            return Redirect::action([SeccionController::class, 'showLoginForm']);
    }
}

