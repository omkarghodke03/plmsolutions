<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CookieConsentController;
use App\Http\Controllers\LinkedInOAuthController;

// careers 
Route::get('/', [JobController::class, 'index'])->name('jobs.index');
Route::get('/careers/{slug}', [JobController::class, 'show'])->name('jobs.show');

Route::middleware(['web'])->group(function () {
    Route::get('/linkedin/connect', [LinkedInOAuthController::class, 'connect'])
        ->name('linkedin.connect');

    Route::get('/linkedin/callback', [LinkedInOAuthController::class, 'callback'])
        ->name('linkedin.callback');

  
    Route::get('/linkedin/status', function () {
        return response()->json([
            'linkedin_connected' => session()->has('linkedin_token'),
            'linkedin_person_id' => session('linkedin_sub'),
            'linkedin_profile'   => session('linkedin_profile'),
        ]);
    });
});


Route::post('/job-application/apply', [JobApplicationController::class, 'apply'])->name('job.application.apply');

Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/search/suggestions', [SearchController::class, 'suggestions'])->name('search.suggestions');

Route::post('/cookie-consent/save',[CookieConsentController::class, 'save'])->name('cookie-consent.save');
