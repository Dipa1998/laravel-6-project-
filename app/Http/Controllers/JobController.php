<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    /**
     * Get the jobs Index view
     */
    public function index()
    {
        $jobs=Job::all();
        return view('jobs.index',compact('jobs'));
    }
    public function show(Job $job)
    {
        return view('jobs.show',compact('job'));
    }
    
    
}
