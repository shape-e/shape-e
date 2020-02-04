<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
            }else if(Auth::user()->rango == "praticante"){
                return redirect()->guest('home');
            }
            else{
                return redirect()->guest('home');

            }
            
        }else{
            return redirect()->guest('home');
        }
        

    }
}
