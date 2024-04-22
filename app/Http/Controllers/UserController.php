<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function enable(User $user) {

        // dd($user);
        $user->perfil_id = 1;
        $user->save();
        return redirect(route('user.index'))->with('success','Usuário habilitado com sucesso!');

    }
}
