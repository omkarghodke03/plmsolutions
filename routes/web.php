<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
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



// Route to show the form

Route::get('/', [HomeController::class, 'index'])->name('home');


// Pages
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/leadership', [PageController::class, 'leadership'])->name('leadership');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/work-culture', [PageController::class, 'workCulture'])->name('workculture');
Route::get('/why-milestone', [PageController::class, 'whyMilestone'])->name('whymilestone');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');



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