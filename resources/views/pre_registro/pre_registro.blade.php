@extends('guest')
@section('title', 'portarias')
@section('authentication')

@if (Auth::user()->perfil_id != null)
<div class="text-white">
    <h1>Seu acesso já foi liberado <span><i class="bi bi-emoji-wink-fill"></i></span></h1>
    <p>Você já pode acessar o sistema</p>
</div>    

@else
<div class="text-white">
    <h1>Usuário registrado com sucesso <span><i class="bi bi-emoji-wink-fill"></i></span></h1>
    <p>converse com seu administrador para liberar seu acesso</p>
</div>

@endif

<a class="btn btn-success" href="{{route('logout')}}">Sair</a>

@endsection
