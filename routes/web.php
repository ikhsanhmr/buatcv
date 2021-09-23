<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
Route::get('/', function () { return view('pages.beranda'); });
Route::get('/about', function () { return view('pages.about'); });
Route::get('/service', function () { return view('pages.service'); });
Route::get('/pricing', function () { return view('pages.pricing'); });
Route::get('/blog', function () { return view('pages.blog'); });
Route::get('/blog_single', function () { return view('pages.blog_single'); });
Route::get('/contact', function () { return view('pages.contact'); });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', [IndexController::class, 'index']);
