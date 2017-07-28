<?php

namespace dbr0\surveys;

use App\Http\Controllers\Controller;

class SurveysController extends Controller
{

    public function index()
    {
        $surveys = Survey::all();
        return view('vendor.dbr0-surveys.index',compact('surveys'));
    }

    public function create()
    {
        return view('vendor.dbr0-surveys.create');
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