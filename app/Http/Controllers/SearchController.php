<?php
namespace App\Http\Controllers;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = trim($request->input('q', ''));
        $pageResults = [];
        $caseStudyResults = collect();
        if ($query !== '') {
            $pages = config('searchable_pages');
            foreach ($pages as $page) {
                $haystack = strtolower($page['title'] . ' ' . $page['keywords']);
                if (str_contains($haystack, strtolower($query))) {
                    $pageResults[] = $page;
                }
            }

          
        }

        return view('search.results', [
            'query' => $query,
            'pageResults' => $pageResults,
            
        ]);
    }

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

         
        }

        return response()->json(array_slice($results, 0, 8)); // max 8 suggestions
    }
}