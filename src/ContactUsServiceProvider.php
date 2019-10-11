<?php

namespace ContactUs;

use Illuminate\Support\ServiceProvider;

class ContactUsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        file_exists(resource_path('/views/vazhenegar'))
            ? $this->loadViewsFrom(resource_path('/views/vazhenegar'), 'ContactUs')
            : $this->loadViewsFrom(__DIR__ . '/views', 'ContactUs');

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        //copy view and css files to user project
        $this->publishes([
            __DIR__ . '/views' => resource_path('/views/vazhenegar'),
            __DIR__ . '/css' => public_path('/css'),
        ]);
    }
}