<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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
Route::get('/about', [LandingController::class, 'about']);
Route::get('/helper', [LandingController::class, 'helper']);
Route::get('/login', [LandingController::class, 'login']);

//Authhhhhhh
Route::post('/login', [LandingController::class, 'authenticate'])->name('login');
Route::post('/logout', [DashboardController::class, 'logout'])->middleware('auth');


//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/users', UserController::class)->middleware('auth');
