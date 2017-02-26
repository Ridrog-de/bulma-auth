<?php

namespace Ridrog\BulmaAuth;

use Illuminate\Support\ServiceProvider;

class BulmaAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->app->make('Ridrog\BulmaAuth\BulmaAuthController');

        $this->publishes([
            __DIR__.'/config.php' => config_path('bulma-auth.php'),
        ], 'bulma-auth-config');

        $this->loadViewsFrom(__DIR__.'/views', 'bulma-auth');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/bulma-auth'),
        ], 'bulma-auth-views');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config.php', 'bulma-auth'
        );
    }
}
