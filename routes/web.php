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


Route::get('/','AutoController@mostrar_autos_index');

Route::get('/vehiculos', function () {
    return view('/principal/vehiculos');
});

Route::get('/vehiculo', function () {
    return view('/principal/vehiculo');
});

Route::get('/contacto', function () {
    return view('/principal/contacto');
});

/*Admin en Auto*/
Route::get('/Admin_auto','AutoController@autos_mostrar');

Route::get('/Admin_auto_borrar','AutoController@auto_eliminar');
Route::post('/Admin_auto_borrar','AutoController@eliminar');

Route::get('/Admin_auto_nuevo','AutoController@auto_nuevo');
Route::post('/Admin_auto_nuevo','AutoController@insertar');

Route::get('/Admin_auto_editar','AutoController@auto_editar');
Route::post('/Admin_auto_editar','AutoController@actualizar');
/////////////////////////////////////////////////////////////////////77
