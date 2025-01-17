<?php

namespace App\Http\Middleware;

use Closure;

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
        if ($request->user()->role != 'Operator' && $request->user()->role != 'Admin' && $request->user()->role != 'SuperAdmin') {
            return redirect('/');
        }
        return $next($request);
    }
}
