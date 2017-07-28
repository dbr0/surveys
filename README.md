# Surveys
A Laravel survey package

Add to your Laravel project:

In `composer.json` under `"require"` add: 

```
"dbr0/surveys": "^0.0.11"
```

Run: `composer update`.

Add 

```
dbr0\surveys\SurveysServiceProvider::class,
```

to your `config/app/` file under `'providers'`.

Publish config/migrations/views: 

```
php artisan vendor:publish --provider="dbr0\surveys\SurveysServiceProvider" --tag=config
php artisan vendor:publish --provider="dbr0\surveys\SurveysServiceProvider" --tag=migrations
php artisan vendor:publish --provider="dbr0\surveys\SurveysServiceProvider" --tag=views`
```

Run: `php artisan migrate`

Add 

```
use SurveyOwner;
```

to your desired model. Default is `App\User` but you still need to add the `use SurveyOwner` to it.

Update `owner_model` array item in `config/dbr0-surveys/main.php` with name of your model. Default is `App/User`.

## Access control and Middleware

A package comes with dummy middleware which you can publish using: 


```
php artisan vendor:publish --provider="dbr0\surveys\SurveysServiceProvider" --tag=middleware
```

To use the middlewares you need to add them to `$routeMiddleware` variable inside of `app/Http/Kernel.php` file.

ie.

```
protected $routeMiddleware = [
        ...
        'visibleSurveys' => VisibleSurveys::class,
    ];
```

You can update these middlewares to limit user CRUD actions. To apply them to certain route you need to update the config file.

ie.

```
'routes' => [ //routes stuff
        ...
        'middleware_index' => [visibleSurveys], //add middleware to index
        ...
        ]
```

This way you can limit access to listing of surveys. The same logic can be applied to other routes.
