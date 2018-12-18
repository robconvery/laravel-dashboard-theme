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
            dirname(__DIR__) . '/assets/views/layouts' => resource_path('views/layouts/dashboard'),
            // publish example logo
            dirname(__DIR__) . '/assets/images' => resource_path('assets/dashboard'),
            // publish sass
            dirname(__DIR__) . '/assets/sass' => resource_path('sass/dashboard'),
            // publish js
            dirname(__DIR__) . '/assets/js' => resource_path('js/dashboard')
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
