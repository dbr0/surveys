# surveys
Laravel survey package

Add to your Laravel project:

In `composer.json` under `"require"` add: `"dbr0/surveys": "^0.0.5"`.

Run: `composer update`.

Add `dbr0\surveys\SurveysServiceProvider::class,` to your `config/app/` file under `'providers'`.

Publish config: `php artisan vendor:publish --provider="dbr0\surveys\SurveysServiceProvider" --tag=config`

Publish migrations: `php artisan vendor:publish --provider="dbr0\surveys\SurveysServiceProvider" --tag=migrations`

Publish views: `php artisan vendor:publish --provider="dbr0\surveys\SurveysServiceProvider" --tag=views`

Run: `php artisan migrate`

Add `use SurveyOwner` to your desired model. Default is `App\User` but you still need to add the `use SurveyOwner` to it.

Update `owner_model` array item in `config/dbr0-surveys/main.php` with name of your model. Default is `User`.

