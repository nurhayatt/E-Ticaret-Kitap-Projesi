<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckNewUser
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
            if (!$request->user()->is_active) {
                Auth::logout();
                abort(403, 'Your membership has not been activated yet. Once activated, you will be contacted.');
            }
        }
        return $next($request);
    }
}