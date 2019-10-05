<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Locutor extends Model
{
    use SoftDeletes;
    
    protected $table = 'locutores';
    protected $fillable = [
    	'nome',
        'programa_id',
    	'facebook',
    	'twitter',
    	'googleplus',
        'biografia',
    ];

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
        $locutor->twitter = $request->twitter;
        $locutor->googleplus = $request->googleplus;
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
