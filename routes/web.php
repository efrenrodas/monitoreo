<?php

use App\Http\Controllers\RegistroController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('registros', RegistroController::class);


Route::group(['middleware' => ['cors']], function () {
    Route::get('datos',[RegistroController::class,'datos'])->name('datos');
    Route::get('grafico',[RegistroController::class,'grafico'])->name('grafico');
});

