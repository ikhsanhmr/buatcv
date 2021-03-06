<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\users\ConfirmPaymentController;
use App\Models\users\ConfirmPayment;

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

Route::prefix('user')->name('user.')->group(function () {
  Route::get('/dashboard', [ConfirmPaymentController::class, 'dashboard'])->name('dashboard');
  Route::get('/konfirmasi-pembayaran', [ConfirmPaymentController::class, 'index'])->name('konfirmasi-pembayaran');
  Route::post('/store/konfirmasi-pembayaran', [ConfirmPaymentController::class, 'store'])->name('store.konfirmasi-pembayaran');
});

Route::prefix('admin')->name('admin.')->group(function () {
  Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');
});


Route::get('/check-out', function () {
    return view('frontend.pages.check_out');
})->name('check-out');

// Upload Bukti Pembayaran


Route::get('/konfirmasi', function () {
  return view('frontend.pages.confirmation');
})->name('konfirmasi');


// Auth::routes();
// Route::get('/home', [HomeController::class, 'index'])->name('home');
