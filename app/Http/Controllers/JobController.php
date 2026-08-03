<?php

namespace App\Http\Controllers;

use App\Models\JobPost;

class JobController extends Controller
{
    // 1. Website Career Page 
    public function index()
    {
        $jobs = JobPost::where('is_active', true)
            ->whereJsonContains('platforms', 'website')
            ->latest()
            ->paginate(10);

        return view('jobs.index', compact('jobs'));
    }

    // 2. Single Job Detail Page 
    public function show($slug)
    {
        $job = JobPost::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('jobs.show', compact('job'));
    }

    // 3. Indeed XML Feed 
    public function indeedFeed()
    {
        $jobs = JobPost::where('is_active', true)
            ->whereJsonContains('platforms', 'indeed')
            ->get();

        return response()->view('jobs.indeed-feed', compact('jobs'))
            ->header('Content-Type', 'text/xml');
    }
}