<?php

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('weather',[App\Http\Controllers\WeatherController::class,'index'])->name('weather');

//Route::resource('photos', PhotoController::class);
Route::resources(['rest'=>RestController::class,'rest1'=>RestController::class,'rest.create'=>RestController::class,]);
//Route::resource('rest',[App\Http\Controllers\RestController::class,'show'])->name('rest');

Route::resources(['resttest.show'=>ResttestController::class,'resttest'=>ResttestController::class,'resttest.create'=>ResttestController::class,]);

Route::get('/test',[App\Http\Controllers\HomeController::class,'index'])->name('test');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        Route::get('login',[App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class,'create'])->name('login');
        Route::post('login',[App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class,'store'])->name('adminlogin');
    });
    Route::get('dashboard',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');
    Route::post('logout',[App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class,'destroy'])->name('logout');
});

