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
Route::get('/support', [SupportTicketController::class, 'create'])->name('support.create');
Route::post('/support', [SupportTicketController::class, 'store'])->name('support.store');

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