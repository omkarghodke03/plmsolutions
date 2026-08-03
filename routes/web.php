<?php
use App\Http\Controllers\CookieConsentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndustriesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CaseStudyController;

use App\Http\Controllers\JobController;
use App\Http\Controllers\LinkedInOAuthController;

use App\Http\Controllers\JobApplicationController;

use App\Http\Controllers\SearchController;


// Route to show the home page all particals 
Route::get('/', [HomeController::class, 'index'])->name('home');


// Pages
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/leadership', [PageController::class, 'leadership'])->name('leadership');
Route::get('/work-culture', [PageController::class, 'workCulture'])->name('workculture');
Route::get('/why-milestone', [PageController::class, 'whyMilestone'])->name('whymilestone');



//services 
Route::prefix('services')->name('service.')->group(function () {

    // BIM Services
    Route::get('/architectural-bim',      [ServiceController::class, 'architecturalBim'])->name('architectural-bim');
    Route::get('/structural-bim',         [ServiceController::class, 'structuralBim'])->name('structural-bim');
    Route::get('/mep-bim',                [ServiceController::class, 'mepBim'])->name('mep-bim');
    Route::get('/bim-services',           [ServiceController::class, 'bimservices'])->name('bim-services');
    Route::get('/clash-detection',        [ServiceController::class, 'clashDetection'])->name('clash-detection');
    Route::get('/4d-5d-scheduling',       [ServiceController::class, 'scheduling4d5d'])->name('4d-5d-scheduling');
    Route::get('/lod-management',         [ServiceController::class, 'lodManagement'])->name('lod-management');
    Route::get('/scan-to-bim',            [ServiceController::class, 'scanToBim'])->name('scan-to-bim');

    // CAD/Engineering
    Route::get('/2d-drafting',            [ServiceController::class, 'drafting2d'])->name('2d-drafting');
    Route::get('/3d-modeling',            [ServiceController::class, 'modeling3d'])->name('3d-modeling');
    Route::get('/product-design',         [ServiceController::class, 'productDesign'])->name('product-design');
    Route::get('/fea-analysis',           [ServiceController::class, 'feaAnalysis'])->name('fea-analysis');
    Route::get('/cfd-simulation',         [ServiceController::class, 'cfdSimulation'])->name('cfd-simulation');
    Route::get('/thermal-analysis',       [ServiceController::class, 'thermalAnalysis'])->name('thermal-analysis');

    // Staffing & PLM
    Route::get('/contract-staffing',      [ServiceController::class, 'contractStaffing'])->name('contract-staffing');
    Route::get('/permanent-staffing',     [ServiceController::class, 'permanentStaffing'])->name('permanent-staffing');
    Route::get('/plm-implementation',     [ServiceController::class, 'plmImplementation'])->name('plm-implementation');
    Route::get('/cad-migration',          [ServiceController::class, 'cadMigration'])->name('cad-migration');
});


Route::prefix('industries')->group(function () {

    Route::get('/residential', [IndustriesController::class, 'residential']);
    Route::get('/commercial', [IndustriesController::class, 'commercial']);
    Route::get('/industrial', [IndustriesController::class, 'industrial']);
    Route::get('/healthcare', [IndustriesController::class, 'healthcare']);
    Route::get('/education', [IndustriesController::class, 'education']);
    Route::get('/retail', [IndustriesController::class, 'retail']);

});

// Contact
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');



// ============================================================
// ADD THESE ROUTES to your routes/web.php cookies route code 
// ============================================================
Route::prefix('cookie')->name('cookie.')->group(function () {
    Route::post('/accept',           [CookieConsentController::class, 'accept'])->name('accept');
    Route::post('/decline',          [CookieConsentController::class, 'decline'])->name('decline');
    Route::post('/save-preferences', [CookieConsentController::class, 'savePreferences'])->name('save-preferences');
});

// CORRECT - only the store method
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('case-studies.index');
Route::get('/case-studies/{slug}', [CaseStudyController::class, 'show'])->name('case-studies.show');


// ============================================================
// Career Page Routes admin panel 
// ============================================================
Route::get('/careers', [JobController::class, 'index'])->name('jobs.index');
Route::get('/careers/{slug}', [JobController::class, 'show'])->name('jobs.show');

// Indeed XML Feed
Route::get('/jobs-feed.xml', [JobController::class, 'indeedFeed'])->name('jobs.indeed');

// LinkedIn OAuth (For Authorization / Connecting Admin Account)
Route::get('/linkedin/connect', [LinkedInOAuthController::class, 'connect'])->name('linkedin.connect');
Route::get('/linkedin/callback', [LinkedInOAuthController::class, 'callback'])->name('linkedin.callback');


// ============================================================
//poppop job apply rout /web.php cookies route code 
// ============================================================
Route::post('/job-application/apply', [JobApplicationController::class, 'apply'])
    ->name('job.application.apply');


// ============================================================
//serach bar code rout  
// ============================================================
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/search/suggestions', [SearchController::class, 'suggestions'])->name('search.suggestions');