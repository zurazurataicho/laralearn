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

//Route::namespace('Greeting')->prefix('greeting')->group(function () {
Route::prefix('greeting')->group(function () {
    Route::get('/', function () {
        return "HOGE";
    });
    Route::get('/say', 'App\Http\Controllers\GreetingController@say');
});
