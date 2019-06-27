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

Route::get('/', 'InicioController@index')->name('inicio');

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function () {
    Route::get('rol','rolController@index')->name('rol');
    Route::get('rol/crear','rolController@crear')->name('crear');
    Route::get('rol/editar','rolController@editar')->name('editar');
});

//Route::get('/', function () {return view('welcome');});

//Auth::routes();

//Route::resource('/notas', 'NotasController')->middleware('auth');

//Route::get('/home', 'HomeController@index')->name('home');
