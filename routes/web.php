<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



// Route to show the home page all particals 
Route::get('/', [HomeController::class, 'index'])->name('home');


// Pages
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/leadership', [PageController::class, 'leadership'])->name('leadership');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/work-culture', [PageController::class, 'workCulture'])->name('workculture');
Route::get('/why-milestone', [PageController::class, 'whyMilestone'])->name('whymilestone');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

//services 
Route::prefix('services')->name('service.')->group(function () {

    // BIM Services
    Route::get('/architectural-bim',      [ServiceController::class, 'architecturalBim'])->name('architectural-bim');
    Route::get('/structural-bim',         [ServiceController::class, 'structuralBim'])->name('structural-bim');
    Route::get('/mep-bim',                [ServiceController::class, 'mepBim'])->name('mep-bim');
    Route::get('/as-built-documentation', [ServiceController::class, 'asBuiltDocumentation'])->name('as-built-documentation');
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


// Contact
// Route::get('/contact', [ContactController::class, 'index'])->name('contact');



// ============================================================
// ADD THESE ROUTES to your routes/web.php cookies route code 
// ============================================================
Route::prefix('cookie')->name('cookie.')->group(function () {

    // POST /cookie/accept          → accept all cookies
    Route::post('/accept',           [CookieConsentController::class, 'accept'])
         ->name('accept');

    // POST /cookie/decline         → decline non-essential
    Route::post('/decline',          [CookieConsentController::class, 'decline'])
         ->name('decline');

    // POST /cookie/save-preferences → save custom choices from modal
    Route::post('/save-preferences', [CookieConsentController::class, 'savePreferences'])
         ->name('save-preferences');

    // GET  /cookie/status          → check current consent status
    Route::get('/status',            [CookieConsentController::class, 'status'])
         ->name('status');
});




// CORRECT - only the store method
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');