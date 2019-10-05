<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Http\Controllers\CrudController;

class EventoController extends CrudController
{
    protected $nome;
    protected $model;
    protected $validacoes = [
        'artista' => 'required',
        'data' => 'required',
        'local' => 'required',
    ];

    public function __construct()
    {
        $this->nomeSingular = 'evento';
        $this->nomePlural = 'eventos';
        $this->model = new Evento();
    }
}
