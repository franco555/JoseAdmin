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
Route::get('seguridad/Login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/Login', 'Seguridad\LoginController@login')->name('login_post');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('', 'AdminController@index');
    Route::get('rol', 'rolController@index')->name('rol');
    Route::get('rol/crear', 'rolController@crear')->name('crear_rol');
    Route::get('rol/editar', 'rolController@editar')->name('editar_rol');
});
