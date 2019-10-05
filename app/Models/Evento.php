<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DB;

class Evento extends Model
{
	use SoftDeletes;
	
    protected $table = 'eventos';

    protected $fillable = ['artista', 'data', 'local'];

    public function registrar($request)
    {
        DB::beginTransaction();

        $evento = $this;

        if ($request->id) {
            $evento = $this->find($request->id);
        }

        $evento->artista = $request->artista;
        $evento->data = $request->data;
    	$evento->local = $request->local;
        $evento->save();

        DB::commit();
    	
    	return true;
    }

    public function excluir($id)
    {
        $this->find($id)->delete();
        return true;
    }
}
