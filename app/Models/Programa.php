<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DB;

class Programa extends Model
{
	use SoftDeletes;

	protected $table = 'programas';

	public function locutor()
	{
		return $this->hasOne('App\Models\Locutor', 'programa_id');
	}

	public function registrar($request)
	{
		DB::beginTransaction();

		$programa = $this;

		if ($request->id) {
			$programa = $this->find($request->id);
		}

		$programa->nome = $request->nome;
		$programa->save();

		DB::commit();

		return true;
	}

	public function excluir($id)
	{
		$this->find($id)->delete();
		return true;
	}
}