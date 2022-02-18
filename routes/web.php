<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('tours', [TourController::class, 'index'])->name('tours');
Route::get('tour/{slug}', [TourController::class, 'show'])->name('tour.show');
Route::get('tour/group/{group}', [TourController::class, 'allByGroup'])->name('tour.group');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
