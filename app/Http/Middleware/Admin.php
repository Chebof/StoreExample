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
    public function handle($request, Closure $next, $role = 'admin')
    {
        if (Auth::check()) {
            if (!auth()->user()->hasRole($role)) {
                return redirect(route('home'));
            }

            return $next($request);
        }
        return redirect(route('login'));
    }
}
