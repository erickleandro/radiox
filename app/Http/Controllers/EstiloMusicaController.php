<?php

namespace App\Http\Controllers;

use App\Models\EstiloMusical;
use App\Http\Controllers\CrudController;

class EstiloMusicalController extends CrudController
{
    protected $nome;
    protected $model;
    protected $validacoes = [
        'nome' => 'required'
    ];

    public function __construct()
    {
        $this->nomeSingular = 'estilo';
        $this->nomePlural = 'estilos_musicais';
        $this->model = new EstiloMusical();
    }
}
