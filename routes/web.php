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


Route::get('/', 'LoginController@form');

//Route::resource('produtos','ProdutoController');

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/novo', 'ProdutoController@novo');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/remover/{id}', 'ProdutoController@remover')->where('id', '[0-9]+');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/alterar/{id}', 'ProdutoController@alterar')->where('id', '[0-9]+');
Route::post('/produtos/update/{id}', 'ProdutoController@update')->where('id', '[0-9]+');

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');
