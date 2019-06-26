<?php

namespace Alish\Telegram;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;

class TelegramServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // use this if your package has views
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'telegram');

        // use this if your package has lang files
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'telegram');

        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');

        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->publishes(
            [
                __DIR__.'/config/config.php' => config_path('telegram.php'),
            ], 'config'
        );
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Telegram', function ($app) {
            $telegram = new Telegram($this->getDefaultToken(), $this->shouldAsync());

            if ($app->bound(DispatcherContract::class)) {
                $telegram->setEventDispatcher(
                    $this->app[DispatcherContract::class]
                );
            }

            return $telegram;
        });
    }

    public function provides()
    {
        return ['Telegram'];
    }

    protected function getDefaultToken()
    {
        $default = config('telegram.default');

        if ($default) {
            return config("telegram.bots.$default.token");
        }

        return config('telegram.bots')[0]['token'];
    }

    protected function shouldAsync()
    {
        return config('telegram.async', false);
    }
}
