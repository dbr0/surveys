<?php

namespace dbr0\surveys;

use Illuminate\Support\ServiceProvider;

class SurveysServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * HOW TO PUBLISH:
         * >> php artisan vendor:publish --provider="dbr0\surveys\SurveysServiceProvider" --tag=config
         *
         *  */
        //enable publishing of config
        $this->publishes([
            __DIR__ . '/config' => config_path('dbr0-surveys'),
        ],'config');

        /*
         * HOW TO PUBLISH:
         * >> php artisan vendor:publish --provider="dbr0\surveys\SurveysServiceProvider" --tag=migrations
         *
         *  */
        //enable publishing of migrations
        $this->publishes([
            __DIR__ . '/Migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //include routes
        include __DIR__.'/routes.php';

        //register controller or something(?)
        $this->app->make('dbr0\surveys\SurveysController');
<<<<<<< HEAD
        $this->app->make('dbr0\surveys\SurveysController');
=======
>>>>>>> d8d600ee9c95bb909f59d8b8a1828440da662690

        //merge config
        $this->mergeConfigFrom(
            __DIR__ . '/config/main.php', 'dbr0-surveys-main'
        );
    }
}
