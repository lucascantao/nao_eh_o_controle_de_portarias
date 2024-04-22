<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Setor;
use App\Models\Perfil;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $setores = Setor::all();
        $perfis = Perfil::all();

        return view('auth.register', 
            ['setores' => $setores],
            ['perfis' => $perfis],
        );
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // dd($request);

        $perfil_id = 1;
        // $setor_id = 1;

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'perfil_id' => $perfil_id,
            'setor_id' => $request->setor
        ]);

        $perfil = Perfil::find($perfil_id);
        $setor = Setor::find($request->setor);

        // $user->perfil()->save($perfil);
        // $perfil->users()->save($user);
        // $setor ->users()->save($user);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('portaria.search', absolute: false));
    }
}
