<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DB;

class Foto extends Model
{
	use SoftDeletes;
	
	protected $table = 'fotos';

	protected $fillable = ['nome', 'arquivo'];

    public function registrar($request)
    {
        DB::beginTransaction();

        $foto = $this;

        if ($request->id) {
            $foto = $this->find($request->id);
        }

    	$foto->nome = $request->nome;
        $foto->save();

        if ($request->arquivo) {
            $extensao = $request->arquivo->getClientOriginalExtension();
            $arquivo = $request->arquivo->storeAs('fotos', uniqid() . ".{$extensao}");
            $foto->arquivo = $arquivo;    
            $foto->save();
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
