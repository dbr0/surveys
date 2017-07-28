<?php

namespace dbr0\surveys;

use App\Http\Controllers\Controller;

class SurveysController extends Controller
{

    public function index()
    {
        //check if middleware has limited surveys
        if(request()->visibleSurveys) {
            $surveys = Survey::with('owner')->whereIn('id',request()->visibleSurveys)->get();
        } else { //get all surveys
            $surveys = Survey::with('owner')->get();
        }

        return view('vendor.dbr0-surveys.index',compact('surveys'));
    }

    public function create()
    {
        $owners = str_replace('/','\\',config('dbr0-surveys.main.owner_model'))::get();
        return view('vendor.dbr0-surveys.create',compact('owners'));
    }

    public function store()
    {
        $survey = Survey::create([
           'name' => request()->name,
           'slug' => request()->name,
           'description' => request()->description,
           'parent_id' => request()->parent,
        ]);

        return redirect()->route('dbr0_surveys/show',$survey->id);
    }

    public function show($id)
    {
        $survey = Survey::find($id);
        return view('vendor.dbr0-surveys.show',compact('survey'));
    }

    public function edit($id)
    {
        dd('edit: '.$id);
    }

    public function update($id)
    {
        dd('update: '.$id);
    }

}