<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')
->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::get('/login', 'LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
