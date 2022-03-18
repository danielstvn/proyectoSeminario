<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



Route::controller(\App\Http\Controllers\ProductsController::class)->group(function(){
    Route::get('/products','getIndex');

    Route::get('/products/show/{id}','getShow');

    Route::get('/products/create','getCreate');

    Route::get('/products/edit/{id}','getEdit');

    Route::post('/products/create','addMovie');

    Route::post('/products/edit','editMovie');
});
