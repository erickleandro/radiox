<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use App\Models\EstiloMusical;
use App\Http\Controllers\CrudController;

class MusicaController extends CrudController
{
    protected $nome;
    protected $model;
    protected $validacoes = [
        'artista' => 'required',
        'nome' => 'required'
    ];
    protected $relacionamentos = [
        'estilos_musicais' => \App\Models\EstiloMusical::class
    ];

    public function __construct()
    {
        $this->nomeSingular = 'musica';
        $this->nomePlural = 'musicas';
        $this->model = new Musica();
    }
}
