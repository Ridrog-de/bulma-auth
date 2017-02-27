<?php

namespace Ridrog\BulmaAuth;

use Ridrog\BulmaAuth\Console\MakeBulmaAuthCommand;
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

        // $this->loadViewsFrom(__DIR__.'/Views', 'bulma-auth');



        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeBulmaAuthCommand::class,
            ]);
        }

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
