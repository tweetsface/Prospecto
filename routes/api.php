<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/prospectos/create',
'App\Http\Controllers\ProspectoController@store')->name('create.prospecto')->middleware('auth:api');

Route::get('/prospectos/index',
'App\Http\Controllers\ProspectoController@index')->name('index.prospecto')->middleware('auth:api');


Route::get('/prospectos/index/{id}',
'App\Http\Controllers\ProspectoController@show')->name('show.prospecto');


Route::put('/prospectos/update/{id}',
'App\Http\Controllers\ProspectoController@update')->name('update.prospecto');

Route::post('/promotores/create',
'App\Http\Controllers\PromotorController@store')->name('create.promotor');

Route::post('/login',
'App\Http\Controllers\LoginController@Login')->name('login');


Route::post('/login',
'App\Http\Controllers\LoginController@destroy')->name('logout');

