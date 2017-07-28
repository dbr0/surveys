<?php

namespace dbr0\surveys;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\User;
=======
>>>>>>> d8d600ee9c95bb909f59d8b8a1828440da662690

class SurveysController extends Controller
{

    public function index()
    {
<<<<<<< HEAD
        $users = User::with('surveys')->get();
        dd($users,$users->pluck('surveys'));
=======
        echo 'Here we are!';
>>>>>>> d8d600ee9c95bb909f59d8b8a1828440da662690
    }

}