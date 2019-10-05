<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DB;

class Musica extends Model
{
	use SoftDeletes;
	
	protected $table = 'musicas';

	protected $fillable = ['artista', 'nome', 'arquivo'];

    public function estilo()
    {
        return $this->belongsTo('App\Models\EstiloMusical', 'estilo_musical_id');
    }

    public function registrar($request)
    {
        DB::beginTransaction();

        $musica = $this;

        if ($request->id) {
            $musica = $this->find($request->id);
        }

        $musica->artista = $request->artista;
        $musica->estilo_musical_id = $request->estilo_musical_id;
    	$musica->nome = $request->nome;
        $musica->save();

        if ($request->arquivo) {
            $extensao = $request->arquivo->getClientOriginalExtension();
            $arquivo = $request->arquivo->storeAs('musicas', uniqid() . ".{$extensao}");
            $musica->arquivo = $arquivo;    
            $musica->save();
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
