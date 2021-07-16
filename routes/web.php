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

Route::get('/search', 'App\Http\Controllers\OxyhelpController@show');
Route::get('vote/{vote}/{id}/{type}', 'App\Http\Controllers\OxyhelpController@destroy');
//Route::put('/search/update?type={type}&id={id}&action={vote}', 'App\Http\Controllers\searchControl@vote')->name('search.vote');
