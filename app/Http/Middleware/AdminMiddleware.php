<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if ($request->user() && $request->user()->rol == 'admin') {
            return $next($request);
        }

        return redirect()->route('login')->with('error', 'Acces interzis! Trebuie să fii autentificat ca admin.');
    }
}
