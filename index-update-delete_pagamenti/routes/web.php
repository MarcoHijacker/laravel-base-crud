<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagamentoController@index') -> name('pagamenti-index');
Route::get('/pagamento/delete/{id}', 'PagamentoController@destroy') -> name('pagamento-delete');
Route::get('/pagamento/edit/{id}', 'PagamentoController@edit') -> name('pagamento-edit');
Route::post('/pagamento/update/{id}', 'PagamentoController@update') -> name('pagamento-update');
