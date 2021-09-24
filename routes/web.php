<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
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
Route::get('/', function () { return view('frontend.pages.beranda'); });
Route::get('/about', function () { return view('frontend.pages.about'); });
Route::get('/service', function () { return view('frontend.pages.service'); });
Route::get('/pricing', function () { return view('frontend.pages.pricing'); });
Route::get('/blog', function () { return view('frontend.pages.blog'); });
Route::get('/blog_single', function () { return view('frontend.pages.blog_single'); });
Route::get('/contact', function () { return view('frontend.pages.contact'); });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', [IndexController::class, 'index']);

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
