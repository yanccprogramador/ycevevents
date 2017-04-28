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

// Visitante
Route::get('logar','LoginsController@getEntrar');




Route::post('entrar', 'LoginsController@Logar');
Route::get('sair', 'EventosControllers@inicio');

Route::get('/',"EventosControllers@inicio");
Route::get('/{id}/part','ParticipantesController@inicio');
Route::get('/{id}/del/{owner}','AdmController@delete');
Route::get('/cadastre/{owner}','EventosControllers@lala');
Route::get('/{id}/gerar/{owner}','AdmController@geraRelatorio');
Route::post('/newEvento','EventosControllers@save');
Route::post('/salvando','ParticipantesController@salvar');

