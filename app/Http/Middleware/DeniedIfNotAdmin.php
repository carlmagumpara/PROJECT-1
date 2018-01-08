<?php

namespace App\Http\Middleware;

use Closure;

class DeniedIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admins')
    {
        if (! \Auth::guard($guard)->check()) {
            return response("Access denied", 403);
        }
        return $next($request);
    }
}
