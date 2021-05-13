<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

    $jobs = Job::get();

     return view('layouts.dashboard', [
        'jobs'=> $jobs
     ]);
    }
}
