<?php

Route::get(config('dbr0-surveys.main.routes.root','surveys'),
    [
        'middleware' => config('dbr0-surveys.main.routes.middleware_index',[]),
        'as' => 'dbr0_surveys/index',
        'uses' => 'dbr0\surveys\SurveysController@index'
    ]);
