<?php

namespace App\Http\Middleware;

use Closure;
Use app\Http\Controllers\Auth\LoginController;

class PermissionMiddleware
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
        $user = Auth::user();
        if(!$user->hasRole('user'))
        {
            //you can throw a 401 unauthorized error here instead of redirecting back
            return redirect()->back(); //this redirects all non-admins back to their previous url's
        }
        return $next($request);
    }
}
