<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setor;
use App\Models\Assunto;

class PortariaController extends Controller
{
    public function search() {
        $setores = Setor::all();
        $assuntos = Assunto::all();
        return view('portarias.search',['setores' => $setores, 'assuntos' => $assuntos]);
    }
}
