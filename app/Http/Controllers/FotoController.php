<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Http\Controllers\CrudController;

class FotoController extends CrudController
{
    protected $nome;
    protected $model;
    protected $validacoes = [
        'nome' => 'required'
    ];

    public function __construct()
    {
        $this->nomeSingular = 'foto';
        $this->nomePlural = 'fotos';
        $this->model = new Foto();
    }
}
