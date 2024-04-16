<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AssuntoController;
use App\Models\Assunto;


class AssuntoController extends Controller
{
    public function index() {
        $assuntos = Assunto::all();
        return view('assuntos.index',['assuntos' => $assuntos]);
    }

    public function create() {
        return view('assuntos.create');
    }

    public function edit(Assunto $assunto) {
        return view('assuntos.edit', ['assunto' => $assunto]);
    }

    public function store(Request $request) {
        //Mensagens de validação
        $messages = [
            'nome.unique' => 'O nome do assunto já está em uso.',
        ];

        $data = $request-> validate([
            'nome' => 'required|string|unique:assuntos,nome',
            'descricao' => 'nullable',
        ], $messages);

        $data['nome'] = mb_strtoupper($data['nome'],"utf-8" );

        $novoAssunto = Assunto::create($data);

        return redirect(route('assunto.index'));
    }

    public function update(Assunto $assunto, Request $request) {
        $data = $request->validate([
            'nome' => 'required|string',
            'descricao' => 'nullable',
        ]);
    
        $assunto->update($data);
    
        return redirect(route('assunto.index'))->with('success', 'Assunto editado com sucesso!');
    }

    public function destroy(Assunto $assunto) {
        $assunto->delete();
        return redirect(route('assunto.index'))->with('success', 'Assunto excluído  com sucesso!');
    }
    
    


}