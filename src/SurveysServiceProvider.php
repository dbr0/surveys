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

        /*
         * HOW TO PUBLISH:
         * >> php artisan vendor:publish --provider="dbr0\surveys\SurveysServiceProvider" --tag=views
         *
         *  */
        //enable publishing of views
        $this->publishes([
            __DIR__ . '/views' => $this->app->basePath().'/resources/views/vendor/dbr0-surveys',
        ],'views');
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

        //merge config
        $this->mergeConfigFrom(
            __DIR__ . '/config/main.php', 'dbr0-surveys-main'
        );

        //get Survey - facade
        $this->app->bind('dbr0-surveys', function() {
            return new Survey;
        });
    }
}
