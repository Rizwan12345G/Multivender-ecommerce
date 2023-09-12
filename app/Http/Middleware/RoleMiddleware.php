<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {

        if (auth()->check() && in_array(auth()->user()->user_type, $roles)) {
            return $next($request);
        }

        // Redirect or perform other actions if the user doesn't have the required role(s)
        return redirect('/');
    }
}
