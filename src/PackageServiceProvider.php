<?php

namespace Robconvery\LaravelDashboardTheme;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            // publish layouts
            dirname(__DIR__) .'/assets/views/layouts' => public_path('/resources/views/layouts/dashboard'),
            // publish example logo
            dirname(__DIR__) .'/assets/images' => public_path('/resources/images/dashboard'),
            // publish sass
            dirname(__DIR__) .'/assets/sass' => public_path('/resources/sass/dashboard'),
            // publish js
            dirname(__DIR__) .'/assets/js' => public_path('resources/js/dashboard')
        ], 'dashboard');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
