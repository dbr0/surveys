<?php
namespace dbr0\surveys;

use Illuminate\Support\Facades\Facade;

class SurveysFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'dbr0-surveys';
    }
}