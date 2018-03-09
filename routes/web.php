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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/search', 'SearchController@show');
Route::get('/products/json', 'SearchController@data');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show'); //
Route::get('/categories/{category}', 'CategoryController@show');

Route::post('/cart', 'CartDetailController@store'); //
Route::delete('/cart', 'CartDetailController@destroy'); //
Route::post('/order', 'CartController@update'); //

Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->group(function () {
  Route::get('/products', 'ProductController@index'); //listado de productos
  Route::get('/products/create', 'ProductController@create'); //crear producto
  Route::post('/products', 'ProductController@store'); //guardar o registrar producto
  Route::get('/products/{id}/edit', 'ProductController@edit'); //editar producto
  Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar producto
  Route::delete('/products/{id}', 'ProductController@destroy'); //eliminar producto

  Route::get('/products/{id}/images', 'ImageController@index'); //listado de imagenes de producto
  Route::post('/products/{id}/images', 'ImageController@store'); //guardar imagenes de producto
  Route::delete('/products/{id}/images', 'ImageController@destroy'); //eliminar imagenes de producto
  Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); //destacar imagenes de producto

  Route::get('/categories', 'CategoryController@index'); //listado de categorias
  Route::get('/categories/create', 'CategoryController@create'); //crear categoria
  Route::post('/categories', 'CategoryController@store'); //guardar o registrar categoria
  Route::get('/categories/{category}/edit', 'CategoryController@edit'); //editar categoria
  Route::post('/categories/{category}/edit', 'CategoryController@update'); //actualizar categoria
  Route::delete('/categories/{category}', 'CategoryController@destroy'); //eliminar categoria
});
