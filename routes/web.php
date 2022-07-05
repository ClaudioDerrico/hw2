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

Route::post('/registrati' , 'App\Http\Controllers\RegistratiController@register')->name("registrati"); //alla chiamat di /registrati chiama la funzione @register

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name("home");
Route::get('/home2', 'App\Http\Controllers\Home2Controller@index')->name("home2");
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name("login");
Route::get('/profilo', 'App\Http\Controllers\ProfiloController@index')->name("profilo");
Route::get('/registrati','App\Http\Controllers\RegistratiController@index')->name("registrati");
Route::get('/allenamento', 'App\Http\Controllers\AllenamentoController@index')->name("allenamento");


Route::get('/login', 'App\Http\Controllers\LoginController@login')->name("login");
Route::post('/login', 'App\Http\Controllers\LoginController@checkLogin')->name("login");
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name("logout");


Route::get('/alimentazione', 'App\Http\Controllers\AlimentazioneController@index')->name("alimentazione");
Route::get('/alimentazione/{query}', 'App\Http\Controllers\AlimentazioneController@api')->name("alimentazione2");


Route::get('/negozio', 'App\Http\Controllers\NegozioController@index')->name("negozio");
Route::post('/negozio', 'App\Http\Controllers\NegozioController@index');



