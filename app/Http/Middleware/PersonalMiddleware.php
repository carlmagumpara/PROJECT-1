<?php

namespace App\Http\Middleware;

use Closure;

class PersonalMiddleware
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
        if ($request->user()->type != 'Personal') {
            return redirect()->back()->with('alert', ['message' => 'Access Denied!', 'alert-type' => 'alert-danger']);
        }
        return $next($request);
    }
}
