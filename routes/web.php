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

Route::get('/', function () {
    return view('site.index');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('dashboard');

Route::middleware(['web', 'auth'])->group(function () {
	// Programa
	Route::get('programa', 'ProgramaController@index')->name('programa');
	Route::get('programa/cadastrar', 'ProgramaController@cadastrar');
	Route::post('programa/registrar', 'ProgramaController@registrar')->name('registrar-programa');
	Route::get('programa/{id}/alterar', 'ProgramaController@alterar');
	Route::post('programa/{id}/atualizar', 'ProgramaController@atualizar')->name('atualizar-programa');
	Route::post('programa/{id}/excluir', 'ProgramaController@excluir')->name('excluir-programa');

	// Locutores
	Route::get('locutor', 'LocutorController@index')->name('locutor');
	Route::get('locutor/cadastrar', 'LocutorController@cadastrar');
	Route::post('locutor/registrar', 'LocutorController@registrar')->name('registrar-locutor');
	Route::get('locutor/{id}/alterar', 'LocutorController@alterar');
	Route::post('locutor/{id}/atualizar', 'LocutorController@atualizar')->name('atualizar-locutor');
	Route::post('locutor/{id}/excluir', 'LocutorController@excluir')->name('excluir-locutor');
});