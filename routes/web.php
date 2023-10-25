<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookExportController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PrintController;

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

//Default Landing
Route::get('/', [LandingController::class, 'index']);
Route::get('/opac', [LandingController::class, 'opac']);
Route::get('/about', [LandingController::class, 'about']);
Route::get('/about', [LandingController::class, 'about']);
Route::get('/helper', [LandingController::class, 'helper']);
Route::get('/login', [LandingController::class, 'login']);
Route::post('/opac/paket', [LandingController::class, 'paket']);
Route::get('/opac/barcode', [LandingController::class, 'barcode']);

//Authhhhhhh
Route::post('/login', [LandingController::class, 'authenticate'])->name('login');
Route::post('/logout', [DashboardController::class, 'logout'])->middleware('auth');


//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/users', UserController::class)->middleware('auth');
Route::resource('/dashboard/books', BookController::class)->middleware('auth');
Route::resource('/dashboard/raks', RakController::class)->middleware('auth');

//Print
Route::post('/dashboard/books/print', [PrintController::class, 'print_book'])->middleware('auth');

//Export Excel Books
Route::get('/export', [BookExportController::class, 'exportBooks'])->middleware('auth');
//Import Excel Books
Route::post('/dashboard/books/import', [BookController::class, 'import'])->middleware('auth');
