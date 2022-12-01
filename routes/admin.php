<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\SlidersController;
use App\Http\Controllers\back\CategoriesController;
use App\Http\Controllers\back\SubCategoriesController;
use App\Http\Controllers\back\UsersController;
use App\Http\Controllers\back\SettingsController;


use App\Http\Controllers\back\DashboardController;


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



Route::group(['prefix'=>'dashboard'],function(){
    Route::get('/', [DashboardController::class, 'home'])->name('home');
    Route::resource('sliders',SlidersController::class);
    Route::resource('categories',CategoriesController::class);
    Route::resource('subcategories',SubCategoriesController::class);
    Route::resource('users',UsersController::class);
    Route::resource('settings',SettingsController::class);

    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
