<?php

namespace dbr0\surveys;

use App\Http\Controllers\Controller;
use App\User;

class SurveysController extends Controller
{

    public function index()
    {
        $surveys = Survey::with('owner')->get();
        return view('vendor.dbr0-surveys.index',compact('surveys'));
    }

    public function create()
    {
        $parents = User::get();
        return view('vendor.dbr0-surveys.create',compact('parents'));
    }

    public function store()
    {
        Survey::create([
           'name' => request()->name,
           'slug' => request()->name,
           'description' => request()->description,
           'parent_id' => request()->parent,
        ]);

        return redirect()->route('dbr0_surveys/index');
    }

}