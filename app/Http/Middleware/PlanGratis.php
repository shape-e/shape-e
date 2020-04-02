<?php

namespace App\Http\Middleware;

use Closure;

class PlanGratis
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->rango == "gratis") {
                return $next($request);
            }
            if (Auth::user()->rango == "") {
                return redirect()->guest('home');
            }
        }else{
            return redirect()->guest('home');
        }
    }
}
