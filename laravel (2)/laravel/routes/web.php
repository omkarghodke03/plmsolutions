<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CookieConsentController;
use App\Http\Controllers\LinkedInOAuthController;
use App\Http\Controllers\IndeedFeedController;

Route::get('/indeed/jobs.xml',[IndeedFeedController::class, 'jobs'])->name('indeed.jobs.feed');


Route::get('/', [JobController::class, 'index'])->name('jobs.index');
Route::get('/careers/{slug}', [JobController::class, 'show'])->name('jobs.show');





Route::middleware(['web'])->group(function () {

    Route::get('/auth/linkedin/connect',
        [LinkedInOAuthController::class, 'connect']
    )->name('linkedin.connect');

    Route::get('/auth/linkedin/callback',
        [LinkedInOAuthController::class, 'callback']
    )->name('linkedin.callback');

    Route::get('/linkedin/status', function () {

        return response()->json([
            'linkedin_connected' => session()->has('linkedin_token'),
            'linkedin_organization_id' =>
                config('services.linkedin.organization_id'),
        ]);

    })->name('linkedin.status');

});




Route::post('/job-application/apply', [JobApplicationController::class, 'apply'])
    ->name('job.application.apply');


Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/search/suggestions', [SearchController::class, 'suggestions'])->name('search.suggestions');

Route::post('/cookie-consent/save',[CookieConsentController::class, 'save'])->name('cookie-consent.save');

