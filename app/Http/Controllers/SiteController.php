<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use App\Models\Programa;
use App\Models\Locutor;
use App\Models\Foto;
use App\Models\Evento;
use App\Models\Mural;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
	public function index()
	{
		$this->data['programas'] = Programa::take(3)->orderBy('id', 'DESC')->get();
		$this->data['musicas'] = Musica::take(10)->orderBy('id', 'DESC')->get();
		$this->data['recados'] = Mural::where('aprovado', 'Sim')->take(6)->orderBy('id', 'DESC')->get();
		$this->data['fotos'] = Foto::take(8)->orderBy('id', 'DESC')->get();
		$this->data['eventos'] = Evento::take(5)->orderBy('id', 'DESC')->get();
		$this->data['locutores'] = Locutor::take(4)->orderBy('id', 'DESC')->get();

		return view('site.index', $this->data);
	}
}
