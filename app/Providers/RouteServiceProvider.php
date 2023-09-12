<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $user = auth()->user();

        if ($user) {
            switch ($user->user_type) {
                case 'customer':
                    $homePath = '/customer/dashboard';
                    break;
                case 'vendor':
                    $homePath = '/vendor/dashboard';
                    break;
                case 'admin':
                    $homePath = '/admin/dashboard';
                    break;
                default:
                    $homePath = '/dashboard'; // Default path if the user type is undefined.
            }
            $this->app['config']->set('auth.defaults.home', $homePath);
        }

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
