<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {

        $jobs = Job::get();

        return view('jobs.index', [
            'jobs'=> $jobs
        ]);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
            
        //     'job_title' => 'required',
        //     'company' => 'required',
        //     'post_url' => 'required'

        // ]);

        Job::create(
            [
                'job_title'=> $request->job_title,
                'company'=> $request->company,
                'apply_date'=> $request->apply_date,
                'post_url'=> $request->post_url,
                'salary'=> $request->salary,
                'deadline'=> $request->deadline,
                'address'=> $request->address,
                'city'=> $request->city,
                'state'=> $request->state,
                'zip'=> $request->zip,
            ]);

        return back();
    }
}
