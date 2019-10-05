<?php

namespace App\Http\Controllers;

use App\Models\Mural;
use App\Http\Controllers\CrudController;

class MuralController extends CrudController
{
    protected $nome;
    protected $model;
    protected $validacoes = [
    	'nome' => 'required',
    	'mensagem' => 'required'
    ];

    public function __construct()
    {
        $this->nomeSingular = 'mural';
        $this->nomePlural = 'mural';
        $this->model = new Mural();
    }
}
