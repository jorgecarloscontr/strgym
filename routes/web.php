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
    return view('inicio');
});
Route::get('/inicio',function () {
    return view('inicio');
});

Route::get('/usuario_insert',function(){
    return view('clienteInsert');
});

Route::get('/listado_cliente',function(){
    return view('clienteShow');
});

Route::get('/empleado_show',function(){
    return view('empleadosShow');
});
Route::get('/empleado_insert',function(){
    return view('empleadoInsert');
});
Route::get('/membresias',function(){
    return view('membresiasShow');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
