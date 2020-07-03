<?php

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
    return view('windows.index');
    //return view('forms.acceso');
    //return view('welcome');
});

Auth::routes();

Route::get('vistaAcceso','views\vistas@inicioSesion')->name('vistaAcceso');
Route::get('registerStudent','views\vistas@registerStudent')->name('registerStudent');
Route::get('back','views\vistas@backaend')->name('back');
Route::post('acceso','Auth\AccesoController@login')->name('acceso');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard','views\vistas@index')->name('dashboard');
