<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DB;

class EstiloMusical extends Model
{
	use SoftDeletes;
	
	protected $table = 'estilos_musicais';

	protected $fillable = ['nome'];

    public function locutores()
    {
    	return $this->belongsToMany('App\Models\EstiloMusical', 'locutores_estilos_musicais');
    }

    public function registrar($request)
    {
        DB::beginTransaction();

        $estilo = $this;

        if ($request->id) {
            $estilo = $this->find($request->id);
        }

    	$estilo->nome = $request->nome;
        $estilo->save();

        DB::commit();
    	
    	return true;
    }

    public function excluir($id)
    {
        $this->find($id)->delete();
        return true;
    }
}
