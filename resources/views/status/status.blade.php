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

<div>
    <a class="btn btn-success" href="{{route('logout')}}"><i class="bi bi-box-arrow-left me-2"></i>Sair</a>
    {{-- <a class="btn btn-success mx-2" href="{{route('profile.edit')}}">Página de Perfil<i class="bi bi-person ms-2"></i></a> --}}
</div>

@endsection
