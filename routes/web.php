<?php

use App\Http\Controllers\CovidController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/covid', [CovidController::class, 'prov']);
Route::get('/covid/{id}', [CovidController::class, 'detail_prov']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/smart-cam', [HomeController::class, 'smartcam']);
Route::get('/smart-map', [HomeController::class, 'smartmap']);

Route::get('/news', [HomeController::class, 'news']);
Route::get('/Detail-berita1', function () {
    return view('news.berita-detail');
});
Route::get('/Detail-berita2', function () {
    return view('news.berita-detail-2');
});
Route::get('/Detail-berita3', function () {
    return view('news.berita-detail-3');
});
Route::get('/Detail-berita4', function () {
    return view('news.berita-detail-4');
});

