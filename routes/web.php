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



//PRODUTOS

Route::get('/order', 'ProdutosController@create_order')
->name('create_order');
Route::get('/v1/order', 'ProdutosController@index')
    ->name('list_order');
Route::post('/web_api/order', 'ProdutosController@list')
    ->name('list');
