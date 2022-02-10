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

Route::get('/', 'HomeController@index')->name('home');

// Register the authentication routes, this is managed by `artisan ui react --auth`
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/source')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/dump', 'SourceController@dump')->name('dump');
    Route::get('/aly', 'SourceController@aly')->name('aly');
});
