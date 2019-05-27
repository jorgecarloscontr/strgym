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
Route::get('membresias/show-membresias-cliente/{cliente}','MembresiaController@show_membresias_cliente')->name('membresias.show_membresias_cliente');
Route::resource('membresias','MembresiaController');
Route::resource('empleados','EmpleadoController');
Route::resource('productos','ProductoController');
Route::get('ventas/create-venta/{cliente}','VentaController@create_venta')->name('ventas.create_venta');
Route::get('ventas/edit-venta/{venta}','VentaController@edit_venta')->name('ventas.edit_venta');
Route::post('ventas/elimina-producto/{venta}','VentaController@elimina_producto')->name('ventas.elimina_producto');
Route::post('ventas/insertar-producto/{venta}','VentaController@insertar_producto')->name('ventas.insertar_producto');

Route::resource('ventas','VentaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
