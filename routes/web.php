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

Route::get('/listaProspecto',function () {
    return view('listaProspecto
    ');

})->middleware('auth');
Route::get('/listaProspecto/{id}',function () {
    return view('detalleProspecto
    ');
})->middleware('auth');


Route::get('/evaluarProspecto/{id}',function () {
    return view('evaluarProspecto
    ');
})->middleware('auth');

Route::get('/login',function () {
    return view('login
    ');
})->name('view.login');

Route::get('/registroPromotor',function () {
    return view('registroPromotor
    ');
})->name('registro');


Route::get('/logout',function () {
    Auth::logout();
    return redirect('/login
    ');
})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
