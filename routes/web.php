<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [StoreController::class, 'home']);
    Route::get('/search', [StoreController::class, 'search']);
    Route::get('/history', [StoreController::class, 'history']);
    Route::get('/profile', [StoreController::class, 'user']);
    Route::get('/cart', [StoreController::class, 'cart']);
    Route::get('/create', [StoreController::class, 'create']);
    Route::post('/store', [StoreController::class, 'store']);
});
