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
    return view('index');
});
Route::resource('/ingreso', 'IngresoController');
Route::resource('/gasto', 'GastoController');
Route::resource('/contacto', 'ContactoController');
Route::resource('/inicio','InicioController');
Route::resource('/usuario','UsuarioController');