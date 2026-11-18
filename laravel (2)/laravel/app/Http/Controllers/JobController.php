<?php

namespace App\Http\Controllers;

use App\Models\JobPost;

class JobController extends Controller
{
   
    public function index()
    {
        $jobs = JobPost::where('is_active', true)
            ->whereJsonContains('platforms', 'website')
            ->latest()
            ->paginate(10);

        return view('jobs.index', compact('jobs'));
    }

    public function show($slug)
    {
        $job = JobPost::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('jobs.show', compact('job'));
    }
}