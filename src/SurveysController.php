<?php

namespace dbr0\surveys;

use App\Http\Controllers\Controller;

class SurveysController extends Controller
{

    public function index()
    {
        $surveys = Survey::with('owner')->get();
        return view('vendor.dbr0-surveys.index',compact('surveys'));
    }

    public function create()
    {
        $owners = str_replace('/','\\',config('dbr0-surveys.main.owner_model'))::get();
        return view('vendor.dbr0-surveys.create',compact('owners'));
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

    public function show($id)
    {
        $survey = Survey::find($id);
        return view('vendor.dbr0-surveys.show',compact('survey'));
    }

}