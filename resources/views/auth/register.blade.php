@extends('guest')
@section('title', 'portarias')
@section('authentication')
<div id="authentication_form" class="d-flex flex-column align-items-center p-4 bg-white">
    {{-- <span class="mt-4"><a href="/"><img src="{{asset('images/SiCop-v1.png')}}" width="128px" alt=""></a></span>

    <hr> --}}

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <label for="name">Nome</label>
            <input id="name" class="mt-1 form-control" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <label for="email">Email</label>
            <input id="email" class="mt-1 form-control" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Setor -->
        <div class="mt-2">
            <label class="form-label" for="Setor">Setor</label>
            <select class="form-select" name="setor" id="setor">
                @foreach ($setores as $setor)
                    <option selected hidden>Selecionar Setor</option>
                    <option name="{{$setor->sigla}}" value="{{$setor->id}}" id="">{{$setor->sigla}}</option>
                @endforeach
            </select>
        </div>

        <!-- Password -->
        <div class="mt-2">
            <label for="password">Senha</label>
            <input id="password" class="mt-1 form-control" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <label for="password_confirmation">Confirmar Senha</label>
            <input id="password_confirmation" class="mt-1 form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-auto d-flex justify-content-center">
            <button type="submit" class="btn btn-success">
                Registrar
            </button>
        </div>

        
    </form>
</div>
@endsection