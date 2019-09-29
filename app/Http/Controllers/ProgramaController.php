<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Http\Controllers\CrudController;

class ProgramaController extends CrudController
{
	protected $validacoes = [
		'nome' => 'required'
	];

	public function __construct()
	{
		$this->nomeSingular = 'programa';
		$this->nomePlural = 'programas';
		$this->model = new Programa();
	}
}