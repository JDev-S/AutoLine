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

Route::get('/vehiculos/{pagina?}','AutoController@mostrar_autos');
Route::get('/vehiculos2/{pagina?}','AutoController@mostrar_autos2');

Route::get('/vehiculo/{id_auto}','AutoController@mostrar_unico_carro');

/*Route::get('/contacto', function () {
    return view('/principal/contacto');
});*/

Route::get('/contacto','HorarioController@mostrar_horario');

/*Admin en Auto*/
Route::get('/Admin_auto','AutoController@autos_mostrar');

Route::get('/Admin_auto_borrar','AutoController@auto_eliminar');
Route::post('/Admin_auto_borrar','AutoController@eliminar');

Route::get('/Admin_auto_nuevo','AutoController@auto_nuevo');
Route::post('/Admin_auto_nuevo','AutoController@insertar');

Route::get('/Admin_auto_editar','AutoController@auto_editar');
Route::post('/Admin_auto_editar','AutoController@actualizar');
/////////////////////////////////////////////////////////////////////77
/*Admin en Especificacion*/
Route::get('/Admin_especificacion','EspecificacionController@especificacion_mostrar');

Route::get('/Admin_especificacion_borrar','EspecificacionController@especificacion_eliminar');
Route::post('/Admin_especificacion_borrar','EspecificacionController@eliminar');

Route::get('/Admin_especificacion_nuevo','EspecificacionController@especificacion_nuevo');
Route::post('/Admin_especificacion_nuevo','EspecificacionController@insertar');

Route::get('/Admin_especificacion_editar','EspecificacionController@especificacion_editar');
Route::post('/Admin_especificacion_editar','EspecificacionController@actualizar');
/////////////////////////////////////////////////////////////////////77
/*Admin en Contacto*/
Route::get('/Admin_contacto','ContactoController@contacto_mostrar');

Route::get('/Admin_contacto_nuevo','ContactoController@contacto_nuevo');
Route::post('/Admin_contacto_nuevo','ContactoController@insertar');

/////////////////////////////////////////////////////////////////////77
/*Admin en Descripcion_especificacion*/
Route::get('/Admin_descripcion_especificacion','Descripcion_especificacionController@descripcion_especificacion_mostrar');

Route::get('/Admin_descripcion_especificacion_borrar','Descripcion_especificacionController@descripcion_especificacion_eliminar');
Route::post('/Admin_descripcion_especificacion_borrar','Descripcion_especificacionController@eliminar');

Route::get('/Admin_descripcion_especificacion_nuevo','Descripcion_especificacionController@descripcion_especificacion_nuevo');
Route::post('/Admin_descripcion_especificacion_nuevo','Descripcion_especificacionController@insertar');

Route::get('/Admin_descripcion_especificacion_editar','Descripcion_especificacionController@descripcion_especificacion_editar');
Route::post('/Admin_descripcion_especificacion_editar','Descripcion_especificacionController@actualizar');
/////////////////////////////////////////////////////////////////////77
/*Admin en Fotos de autos*/
Route::get('/Admin_fotos_autos','Fotos_autoController@fotos_autos_mostrar');

Route::get('/Admin_fotos_autos_borrar','Fotos_autoController@fotos_autos_eliminar');
Route::post('/Admin_fotos_autos_borrar','Fotos_autoController@eliminar');

Route::get('/Admin_fotos_autos_nuevo','Fotos_autoController@fotos_autos_nuevo');
Route::post('/Admin_fotos_autos_nuevo','Fotos_autoController@insertar');

Route::get('/Admin_fotos_autos_editar','Fotos_autoController@fotos_autos_editar');
Route::post('/Admin_fotos_autos_editar','Fotos_autoController@actualizar');
/////////////////////////////////////////////////////////////////////77
/////////////////////////////////////////////////////////////////////77
/*Admin en Horario*/
Route::get('/Admin_horario','HorarioController@horario_mostrar');

Route::get('/Admin_horario_editar','HorarioController@horario_editar');
Route::post('/Admin_horario_editar','HorarioController@actualizar');
/////////////////////////////////////////////////////////////////////77
/*Mandar correo desde contacto*/
Route::post('/contactar', 'EmailController@contact')->name('contact');
/*Mandar correo desde cotizador*/