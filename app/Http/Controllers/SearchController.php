<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Full search results page
     */
    public function index(Request $request)
    {
        $query = trim($request->input('q', ''));

        $pageResults = [];
        $caseStudyResults = collect();

        if ($query !== '') {
            // 1. Search static pages
            $pages = config('searchable_pages');
            foreach ($pages as $page) {
                $haystack = strtolower($page['title'] . ' ' . $page['keywords']);
                if (str_contains($haystack, strtolower($query))) {
                    $pageResults[] = $page;
                }
            }

            // 2. Search case studies (DB based — future-proof)
            $caseStudyResults = CaseStudy::where('title', 'like', "%{$query}%")
                ->orWhere('short_description', 'like', "%{$query}%")
                ->orWhere('category', 'like', "%{$query}%")
                ->orWhere('industry_tag', 'like', "%{$query}%")
                ->orWhere('client', 'like', "%{$query}%")
                ->latest()
                ->get();
        }

        return view('search.results', [
            'query' => $query,
            'pageResults' => $pageResults,
            'caseStudyResults' => $caseStudyResults,
        ]);
    }

    /**
     * AJAX live suggestions (autocomplete dropdown, like Google)
     */
    public function suggestions(Request $request)
    {
        $query = trim($request->input('q', ''));
        $results = [];

        if (strlen($query) >= 2) {
            // Static pages
            foreach (config('searchable_pages') as $page) {
                $haystack = strtolower($page['title'] . ' ' . $page['keywords']);
                if (str_contains($haystack, strtolower($query))) {
                    $results[] = [
                        'title' => $page['title'],
                        'url'   => $page['url'],
                        'type'  => 'Page',
                    ];
                }
            }

            // Case studies
            $studies = CaseStudy::where('title', 'like', "%{$query}%")
                ->orWhere('category', 'like', "%{$query}%")
                ->limit(5)
                ->get(['title', 'slug']);

            foreach ($studies as $study) {
                $results[] = [
                    'title' => $study->title,
                    'url'   => url('/case-studies/' . $study->slug),
                    'type'  => 'Case Study',
                ];
            }
        }

        return response()->json(array_slice($results, 0, 8)); // max 8 suggestions
    }
}