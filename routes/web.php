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

// Route CV
Route::view('/', 'frontend.pages.beranda')->name('home');
Route::view('/template-cv', 'frontend.pages.beranda')->name('template.cv');
Route::view('/cara-membuat-cv', 'frontend.pages.beranda')->name('cara.membuat.cv');
Route::view('/contoh-cv', 'frontend.pages.beranda')->name('contoh.cv');

// Route Surat Lamaran Kerja
Route::view('/template-surat-lamaran-kerja', 'frontend.pages.beranda')->name('template.kerja');
Route::view('/cara-buat-surat-lamaran-kerja', 'frontend.pages.beranda')->name('cara.kerja');
Route::view('/contoh-surat-lamaran-kerja', 'frontend.pages.beranda')->name('contoh.kerja');

Route::get('/info-lowongan-kerja', function () { return view('frontend.pages.about'); })->name('info.kerja');
Route::get('/blog', function () { return view('frontend.pages.about'); })->name('blog');


// Create CV
Route::get('/create-cv', [IndexController::class, 'create']) ->name('create-cv');
Route::get('/preview-cv', [IndexController::class, 'preview']) ->name('preview-cv');

Route::prefix('admin')->name('admin.')->group(function () {
  Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');
});


// Auth::routes();
// Route::get('/home', [HomeController::class, 'index'])->name('home');
