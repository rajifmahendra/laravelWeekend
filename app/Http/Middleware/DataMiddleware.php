<?php

namespace App\Http\Middleware;

use Closure;

class DataMiddleware
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
        dd('Data Middleware Aktif');
        return $next($request);
    }
}
