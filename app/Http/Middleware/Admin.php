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
    public function handle($request, Closure $next, $role = 'admin')
    {
        if (!auth()->user()->hasRole($role)) {
            return redirect(route('home'));
        }

        return $next($request);
    }
}
