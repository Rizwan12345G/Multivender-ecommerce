<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectBasedOnUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if ($user) {
            switch ($user->user_type) {
                case 'customer':
                    return redirect('/customer/dashboard');
                case 'vendor':
                    return redirect('/vendor/dashboard');
                case 'admin':
                    return redirect('/admin/dashboard');
                default:
                    return redirect('/'); // Redirect to a default page if the user type is undefined.
            }
        }

        return $next($request);
    }
}
