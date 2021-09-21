<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleVerification
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
        // - Si on est connecté on peut aller sur les pages Accueil et Article
        if(Auth::check() && Auth::user()->role->name === "admin"){
            return $next($request);
        }
        else{
            abort(403);

        }



    }
}
