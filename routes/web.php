<?php

use App\Http\Controllers\admin\ArtikelController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\JenisLayananController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\LayananController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\frontend\ArtikelFrontendController;
use App\Http\Controllers\frontend\KomentarArtikelController;
use App\Http\Controllers\frontend\KomentarFrontendController;
use App\Http\Controllers\frontend\KontakFrontendController;
use App\Http\Controllers\frontend\LayananFrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::group(['as' => 'frontend.', 'prefix' => 'frontend'], function () {
    Route::resource('frontend-artikel', ArtikelFrontendController::class);
    Route::resource('frontend-layanan', LayananFrontendController::class);
    Route::resource('frontend-kontak', KontakFrontendController::class);
    Route::resource('frontend-komentar', KomentarFrontendController::class);
    Route::resource('frontend-komentar-artikel', KomentarArtikelController::class);
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
        Route::resource('data-kategori', KategoriController::class);
        Route::resource('data-artikel', ArtikelController::class);
        Route::resource('data-event', EventController::class);
        Route::resource('data-jenis-layanan', JenisLayananController::class);
        Route::resource('data-layanan', LayananController::class);
        Route::resource('data-profile', ProfileController::class);
    });
});
