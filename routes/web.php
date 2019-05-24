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

Route::get('/','AsistenciaController@index');

Route::resource('clientes','ClienteController');
Route::resource('asistencias','AsistenciaController');

Route::get('/empleado_show',function(){
    return view('empleadosShow');
});
Route::get('/empleado_insert',function(){
    return view('empleadoInsert');
});
Route::get('/membresias',function(){
    return view('membresiasShow');
});
Route::get('/ventas',function(){
    return view('puntoVenta');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
