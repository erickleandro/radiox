<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DB;

class Locutor extends Model
{
	use SoftDeletes;

	protected $table = 'locutores';

	public function programa()
	{
		return $this->belongsTo('App\Models\Programa');
	}

	public function estilos()
	{
		return $this->belongsToMany('App\Models\EstiloMusical', 'locutores_estilos_musicais');
	}

	public function registrar($request)
	{
		DB::beginTransaction();

		$locutor = $this;

		if ($request->id) {
			$locutor = $this->find($request->id);
		}

		$locutor->nome = $request->nome;
		$locutor->programa_id = $request->programa_id;
		$locutor->facebook = $request->facebook;
		$locutor->googleplus = $request->googleplus;
		$locutor->twitter = $request->twitter;
		$locutor->biografia = $request->biografia;
		$locutor->save();

		if ($request->estilos) {
			$locutor->estilos()->sync($request->estilos);
		}

		if ($request->foto) {
			$foto = $request->foto->store('locutores');
			$locutor->foto = $foto;
			$locutor->save();
		}

		DB::commit();

		return true;
	}

	public function excluir($id)
	{
		$this->find($id)->delete();
		return true;
	}
}