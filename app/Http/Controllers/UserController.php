<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perfil;
use App\Models\Setor;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function enable(User $user) {
        $user->perfil_id = 1;
        $user->save();
        return redirect(route('user.index'))->with('success','Usuário habilitado com sucesso!');

    }

    public function edit(User $user) {
        $setores = Setor::all();
        $perfis = Perfil::all();
        return view('users.edit', [
            'user' => $user,
            'setores' => $setores,
            'perfis' => $perfis,
        ]);
    }

    public function update(User $user, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'setor_id' => 'required',
            'perfil_id' => 'required',
        ]);

        

        $user->update($data);

        return redirect(route('user.index'))->with('success','Usuário editado com sucesso!');
    }
}
