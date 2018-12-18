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
        // publish layouts
        $this->publishes([
            dirname(__DIR__) .'/assets/views/layouts' => public_path('resources/views/layouts/dashboard'),
            dirname(__DIR__) .'/assets/images' => public_path('resources/images/dashboard'),
        ], 'layouts');

        // publish sass
        $this->publishes([
            dirname(__DIR__) .'/assets/sass' => public_path('resources/sass/dashboard'),
        ], 'sass');

        // publish js
        $this->publishes([
            dirname(__DIR__) .'/assets/js' => public_path('resources/js/dashboard'),
        ], 'js');
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
