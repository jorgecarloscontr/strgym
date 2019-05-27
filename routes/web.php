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

Route::get('/','AsistenciaController@index')->middleware('auth');

Route::resource('clientes','ClienteController')->middleware('auth');
Route::resource('asistencias','AsistenciaController')->middleware('auth');
Route::resource('ejercicios','EjercicioController')->middleware('auth');
Route::get('rutinas/create-rutina/{cliente}','RutinaController@create_rutina')->name('rutinas.create_rutina')->middleware('auth');
Route::get('rutinas/edit-rutina/{cliente}','RutinaController@edit_rutina')->name('rutinas.edit_rutina')->middleware('auth');
Route::post('rutinas/insertar-ejercicio/{rutina}','RutinaController@insertar_ejercicio')->name('rutinas.insertar_ejercicio')->middleware('auth');
Route::post('rutinas/elimina-ejercicio/{rutina}','RutinaController@elimina_ejercicio')->name('rutinas.elimina_ejercicio')->middleware('auth');
Route::resource('rutinas','RutinaController')->middleware('auth');
Route::get('membresias/show-membresias-cliente/{cliente}','MembresiaController@show_membresias_cliente')->name('membresias.show_membresias_cliente')->middleware('auth');
Route::resource('membresias','MembresiaController')->middleware('auth');
Route::resource('empleados','EmpleadoController')->middleware('auth');
Route::match(['GET', 'POST'], '/productos/listado', 'ProductoController@index')->name('Productos.index');
Route::resource('productos','ProductoController')->middleware('auth');
Route::get('ventas/create-venta/{cliente}','VentaController@create_venta')->name('ventas.create_venta')->middleware('auth');
Route::get('ventas/edit-venta/{venta}','VentaController@edit_venta')->name('ventas.edit_venta')->middleware('auth');
Route::post('ventas/elimina-producto/{venta}','VentaController@elimina_producto')->name('ventas.elimina_producto')->middleware('auth');
Route::post('ventas/insertar-producto/{venta}','VentaController@insertar_producto')->name('ventas.insertar_producto')->middleware('auth');

Route::resource('ventas','VentaController')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
