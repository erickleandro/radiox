<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DB;

class Mural extends Model
{
	use SoftDeletes;
	
	protected $table = 'mural';

	protected $fillable = ['nome', 'email', 'mensagem', 'aprovado'];

    public function registrar($request)
    {
        DB::beginTransaction();

        $mural = $this;

        if ($request->id) {
            $mural = $this->find($request->id);
        }

        $mural->nome = $request->nome;
        $mural->email = $request->email;
        $mural->mensagem = $request->mensagem;
    	$mural->aprovado = $request->aprovado;
        $mural->save();

        DB::commit();
    	
    	return true;
    }

    public function excluir($id)
    {
        $this->find($id)->delete();
        return true;
    }
}
