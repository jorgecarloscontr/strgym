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

Route::resource('clientes','ClienteController')->middleware('auth');
Route::resource('asistencias','AsistenciaController');
Route::resource('ejercicios','EjercicioController');
Route::get('rutinas/create-rutina/{cliente}','RutinaController@create_rutina')->name('rutinas.create_rutina');
Route::get('rutinas/edit-rutina/{cliente}','RutinaController@edit_rutina')->name('rutinas.edit_rutina');
Route::post('rutinas/insertar-ejercicio/{rutina}','RutinaController@insertar_ejercicio')->name('rutinas.insertar_ejercicio');
Route::post('rutinas/elimina-ejercicio/{rutina}','RutinaController@elimina_ejercicio')->name('rutinas.elimina_ejercicio');
Route::resource('rutinas','RutinaController');

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
