<?php

use App\Http\Controllers\AtraksiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\KatalogIkanController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UlasanController;
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


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SessionController::class, 'index'] )->name('login');
    Route::post('/login', [SessionController::class, 'login']);
    
    Route::get('/atraksi/detail/{id}', [HomeController::class,'showAtraksi']);
    Route::get('/sejarah/profile/', [HomeController::class,'showSejarah'])->name("profile");
    Route::get('/berita{id}', [HomeController::class,'showBerita']);
});
Route::middleware(['auth'])->group(function () {
    Route::resource('atraksi', AtraksiController::class);
    Route::resource('homestay', HomestayController::class);
    Route::resource('ikan', KatalogIkanController::class);
    Route::resource('wisata', PaketWisataController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('ulasan ', UlasanController::class);
    Route::resource('sejarah', SejarahController::class);
    Route::get('/logout', [SessionController::class, 'logout']);
    Route::get('/dashboard', function () {
    return view('dashboard');
        })->name('dashboard');
});
Route::get('/home', function () {
    return redirect('dashboard');
});
Route::get('/', function () {
    return view('home');
});

