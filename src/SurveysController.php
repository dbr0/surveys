<?php

namespace dbr0\surveys;

use App\Http\Controllers\Controller;
use App\User;

class SurveysController extends Controller
{

    public function index()
    {
        $users = User::with('surveys')->get();
        dd($users,$users->pluck('surveys'));
    }

}