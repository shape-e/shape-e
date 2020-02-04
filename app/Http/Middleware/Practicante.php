<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Practicante
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
            if (Auth::user()->email == "aviladaniel009@gmail.com") {
                return $next($request);
            }
            if (Auth::user()->rango == "practicante") {
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
