<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index(Request $request)
    {
        $query = CaseStudy::query();

        // Category filter
        if ($request->filled('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%")
                  ->orWhere('industry_tag', 'like', "%{$search}%");
            });
        }

        $caseStudies = $query->latest()->get();

        $categories = CaseStudy::select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('casestudys.case-study-listing', compact('caseStudies', 'categories'));
    }

    public function show(string $slug)
    {
        $caseStudy = CaseStudy::where('slug', $slug)->firstOrFail();
        return view('casestudys.single-page', compact('caseStudy'));
    }
}