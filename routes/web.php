<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DirectionController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\TourGroupController;
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
Route::get('tours', [\App\Http\Controllers\TourController::class, 'index'])->name('tours');
Route::get('groups',[\App\Http\Controllers\TourGroupController::class, 'index'])->name('groups.index');
Route::get('tour/{slug}', [\App\Http\Controllers\TourController::class, 'show'])->name('tour.show');
Route::get('tour/group/{group}', [\App\Http\Controllers\TourController::class, 'allByGroup'])->name('tour.group');

Auth::routes();

Route::group(['prefix'=>'inside', 'middleware'=>['auth']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('tour', TourController::class, ['as'=>'admin']);
    Route::resource('tour-group', TourGroupController::class, ['as'=>'admin']);
    Route::resource('country', CountryController::class, ['as'=>'admin']);
    Route::resource('region', RegionController::class, ['as'=>'admin']);
    Route::resource('city', CityController::class, ['as'=>'admin']);
    Route::resource('direction', DirectionController::class,['as' => 'admin']);
});
