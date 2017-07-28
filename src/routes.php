<?php

Route::get(config('dbr0-surveys.main.routes.root','surveys'),
    [
        'middleware' => config('dbr0-surveys.main.routes.middleware_index',[]),
        'as' => 'dbr0_surveys/index',
        'uses' => 'dbr0\surveys\SurveysController@index'
    ]);
Route::get(config('dbr0-surveys.main.routes.root','surveys').'/create',
    [
        'middleware' => config('dbr0-surveys.main.routes.middleware_create',[]),
        'as' => 'dbr0_surveys/create',
        'uses' => 'dbr0\surveys\SurveysController@create'
    ]);
Route::post(config('dbr0-surveys.main.routes.root','surveys').'/store',
    [
        'middleware' => config('dbr0-surveys.main.routes.middleware_store',[]),
        'as' => 'dbr0_surveys/store',
        'uses' => 'dbr0\surveys\SurveysController@store'
    ]);
Route::get(config('dbr0-surveys.main.routes.root','surveys').'/{id?}',
    [
        'middleware' => config('dbr0-surveys.main.routes.middleware_show',[]),
        'as' => 'dbr0_surveys/show',
        'uses' => 'dbr0\surveys\SurveysController@show'
    ]);
