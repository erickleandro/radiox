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

Route::get('/', 'SiteController@index')->name('site');
Route::post('publicar-mural', 'MuralController@registrar')->name('publicar-mural');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::middleware(['web', 'auth'])->group(function () {
	// Locutor
	Route::get('locutor', 'LocutorController@index')->name('locutor');
	Route::get('locutor/cadastrar', 'LocutorController@cadastrar');
	Route::post('locutor/registrar', 'LocutorController@registrar')->name('registrar-locutor');
	Route::get('locutor/{id}/alterar', 'LocutorController@alterar');
	Route::post('locutor/{id}/atualizar', 'LocutorController@atualizar')->name('atualizar-locutor');
	Route::post('locutor/{id}/excluir', 'LocutorController@excluir')->name('excluir-locutor');

	// Programa
	Route::get('programa', 'ProgramaController@index')->name('programa');
	Route::get('programa/cadastrar', 'ProgramaController@cadastrar');
	Route::post('programa/registrar', 'ProgramaController@registrar')->name('registrar-programa');
	Route::get('programa/{id}/alterar', 'ProgramaController@alterar');
	Route::post('programa/{id}/atualizar', 'ProgramaController@atualizar')->name('atualizar-programa');
	Route::post('programa/{id}/excluir', 'ProgramaController@excluir')->name('excluir-programa');

	// Estilo Musical
	Route::get('estilo-musical', 'EstiloMusicalController@index')->name('estilo-musical');
	Route::get('estilo-musical/cadastrar', 'EstiloMusicalController@cadastrar');
	Route::post('estilo-musical/registrar', 'EstiloMusicalController@registrar')->name('registrar-estilo-musical');
	Route::get('estilo-musical/{id}/alterar', 'EstiloMusicalController@alterar');
	Route::post('estilo-musical/{id}/atualizar', 'EstiloMusicalController@atualizar')->name('atualizar-estilo-musical');
	Route::post('estilo-musical/{id}/excluir', 'EstiloMusicalController@excluir')->name('excluir-estilo-musical');


	// Musica
	Route::get('musica', 'MusicaController@index')->name('musica');
	Route::get('musica/cadastrar', 'MusicaController@cadastrar');
	Route::post('musica/registrar', 'MusicaController@registrar')->name('registrar-musica');
	Route::get('musica/{id}/alterar', 'MusicaController@alterar');
	Route::post('musica/{id}/atualizar', 'MusicaController@atualizar')->name('atualizar-musica');
	Route::post('musica/{id}/excluir', 'MusicaController@excluir')->name('excluir-musica');

	// Foto
	Route::get('foto', 'FotoController@index')->name('foto');
	Route::get('foto/cadastrar', 'FotoController@cadastrar');
	Route::post('foto/registrar', 'FotoController@registrar')->name('registrar-foto');
	Route::get('foto/{id}/alterar', 'FotoController@alterar');
	Route::post('foto/{id}/atualizar', 'FotoController@atualizar')->name('atualizar-foto');
	Route::post('foto/{id}/excluir', 'FotoController@excluir')->name('excluir-foto');

	// Evento
	Route::get('evento', 'EventoController@index')->name('evento');
	Route::get('evento/cadastrar', 'EventoController@cadastrar');
	Route::post('evento/registrar', 'EventoController@registrar')->name('registrar-evento');
	Route::get('evento/{id}/alterar', 'EventoController@alterar');
	Route::post('evento/{id}/atualizar', 'EventoController@atualizar')->name('atualizar-evento');
	Route::post('evento/{id}/excluir', 'EventoController@excluir')->name('excluir-evento');

	// Mural
	Route::get('mural', 'MuralController@index')->name('mural');
	Route::get('mural/cadastrar', 'MuralController@cadastrar');
	Route::post('mural/registrar', 'MuralController@registrar')->name('registrar-mural');
	Route::get('mural/{id}/alterar', 'MuralController@alterar');
	Route::post('mural/{id}/atualizar', 'MuralController@atualizar')->name('atualizar-mural');
	Route::post('mural/{id}/excluir', 'MuralController@excluir')->name('excluir-mural');
});