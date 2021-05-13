<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        return view('jobs.index2');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name2' => 'required',
        ]);
        
        $request->user()->jobs()->create([
             'name2' => $request->name
        ]);

        

        return back();

    }
}


/*         $request->user()->jobs()->create([
            'job_title' => $request->job_title,
            'company' => $request->company,
            'apply_date' => $request->apply_date,
            'post_url' => $request->post_url,
            'salaryany' => $request->salary,
            'deadline' => $request->deadline,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
        ]); */