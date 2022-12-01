<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\UsersController;
use App\Http\Controllers\back\SlidersController;
use App\Http\Controllers\back\ContactsController;
use App\Http\Controllers\back\SettingsController;
use App\Http\Controllers\back\DashboardController;


use App\Http\Controllers\back\CategoriesController;
use App\Http\Controllers\back\SubCategoriesController;
use App\Http\Controllers\back\BlogCategoriesController;


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

Route::get('/', function () {
    return view('welcome');
    // return number_format((float)'105', 2, '.', ''); // Outputs -> 105.00
});

Route::group(['prefix'=>'dashboard'],function(){
    Route::get('/', [DashboardController::class, 'home'])->name('home');
    Route::resource('sliders',SlidersController::class);
    Route::resource('categories',CategoriesController::class);
    Route::resource('subcategories',SubCategoriesController::class);
    Route::resource('users',UsersController::class);
    Route::resource('settings',SettingsController::class);
    Route::resource('contacts',ContactsController::class);
    Route::resource('blogcategories',BlogCategoriesController::class);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
