<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $isPermitted = (Auth::user()->cargo == 'Administrador' || Auth::user()->cargo == 'SuperAdmin' || Auth::user()->cargo == 'Admin');

        if ($isPermitted == false) {
            return redirect('/login')->with(Auth::logout())->withErrors( 'UPS! Não tem permissões de acesso.');
        }

        return $next($request);
    }
}
