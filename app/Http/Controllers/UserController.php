<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perfil;
use App\Models\Setor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $users = User::where('perfil_id', '<=', 2 )->orWhere('perfil_id', '=', null)->get();
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
        $perfis = Perfil::where('id', '<=', Auth::user()->perfil_id)->get();
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
