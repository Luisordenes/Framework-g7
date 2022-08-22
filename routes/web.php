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

Route::get('/', function () {
    return view('/layouts/master');
});

Route::get('/producto/agregar', 'ProductosController@agregarProducto');
Route::post('/producto/grabar', 'ProductosController@grabarProducto');
Route::get('/producto/listar', 'ProductosController@listarProducto');
Route::get('/producto/consultar/{dato}', 'ProductosController@consultarProducto');
Route::get('/producto/editar/{id}', 'ProductosController@editarProducto');
Route::post('/producto/regrabar/{id}', 'ProductosController@regrabarProducto');
Route::get('/producto/eliminar/{id}', 'ProductosController@eliminarProducto');
Route::get('/producto/stock/{id}', 'ProductosController@stockProducto');

Route::get('/miniatura/{filename}', 'ProductosController@getImagen');

Route::get('/categoria/agregar', 'CategoriasController@agregarCategoria');
Route::post('/categoria/grabar', 'CategoriasController@grabarCategoria');
Route::get('/categoria/listar', 'CategoriasController@listarCategoria');
Route::get('/categoria/editar/{id}', 'CategoriasController@editarCategoria');
Route::post('/categoria/regrabar/{id}', 'CategoriasController@regrabarCategoria');
Route::get('/categoria/eliminar/{id}', 'CategoriasController@eliminarCategoria');
Route::get('/categoria/stock/{id}', 'CategoriasController@stockCategoria');

Route::get('/sucursal/agregar', 'SucursalesController@agregarSucursal');
Route::post('/sucursal/grabar', 'SucursalesController@grabarSucursal');
Route::get('/sucursal/listar', 'SucursalesController@listarSucursal');
Route::get('/sucursal/editar/{id}', 'SucursalesController@editarSucursal');
Route::post('/sucursal/regrabar/{id}', 'SucursalesController@regrabarSucursal');
Route::get('/sucursal/eliminar/{id}', 'SucursalesController@eliminarSucursal');
Route::get('/sucursal/stock/{id}', 'SucursalesController@stockSucursal');

Route::get('/stock/agregar', 'StockController@agregarStock');
Route::post('/stock/grabar', 'StockController@grabarStock');
Route::get('/stock/listar', 'StockController@listarStock');
Route::get('/stock/editar', 'StockController@editarStock');
Route::get('/stock/editando/{id}', 'StockController@editandoStock');
Route::post('/stock/regrabar/{id}', 'StockController@regrabarStock');
Route::get('/stock/mensaje/{id}', 'StockController@mensajeStock');
Route::get('/stock/eliminar/{id}', 'StockController@eliminarStock');




