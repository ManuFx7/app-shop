<?php

/*
|--------------------------------------------------------------------------
| Rutas de la Aplicación
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products','ProductController@index'); //Listado de Productos
Route::get('/admin/products/create','ProductController@create'); //Show Creación Productos
Route::post('/admin/products','ProductController@store'); //Crear Producto
Route::get('/admin/products/{id}/edit','ProductController@edit'); //Muestra Formulario Edicion
Route::put('/admin/products/{id}/update','ProductController@update'); //Actualizo producto
Route::delete('/admin/products/{id}/delete','ProductController@destroy'); //Borrado

/* Route::resource('almacen/articulo','ArticuloController'); */
