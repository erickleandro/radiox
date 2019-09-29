<?php

namespace App\Http\Controllers;

use App\Models\Locutor;
use App\Models\EstiloMusical;
use App\Http\Controllers\CrudController;

class LocutorController extends CrudController
{
	protected $validacoes = [
		'nome' => 'required'
	];
	protected $relacionamentos = [
		'estilos_musicais' => \App\Models\EstiloMusical::class,
		'programas' => \App\Models\Programa::class
	];

	public function __construct()
	{
		$this->nomeSingular = 'locutor';
		$this->nomePlural = 'locutores';
		$this->model = new Locutor();
	}
}