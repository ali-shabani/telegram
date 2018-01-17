<?php

namespace Alish\Telegram;

use Illuminate\Support\ServiceProvider;

class TelegramServiceProvider extends ServiceProvider
{
    protected $defer = false;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */

    public function boot()
    {

        // use this if your package has views
        $this->loadViewsFrom(realpath(__DIR__ . '/resources/views'), 'telegram');

        // use this if your package has lang files
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'telegram');
        
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');

        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        $this->publishes(
            [
                 __DIR__ . '/config/config.php' => config_path('telegram.php')
            ], 'config'
        );

        // use the vendor configuration file as fallback
        // $this->mergeConfigFrom(
        //     __DIR__.'/config/config.php', 'skeleton'
        // );
    }
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */



    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Telegram', function ($app) {
            return new TelegramFactory();
        });
    }

    public function provides()
    {
        return array('Telegram');
    }
}