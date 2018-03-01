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

Route::middleware(['auth','admin'])->prefix('admin')->group(function(){
Route::get('/products','ProductController@index'); //Listado de Productos
Route::get('/products/create','ProductController@create'); //Show Creación Productos
Route::post('/products','ProductController@store'); //Crear Producto
Route::get('/products/{id}/edit','ProductController@edit'); //Muestra Formulario Edicion
Route::put('/products/{id}/update','ProductController@update'); //Actualizo producto
Route::delete('/products/{id}/delete','ProductController@destroy'); //Borrado
});



/* Route::resource('almacen/articulo','ArticuloController'); */
