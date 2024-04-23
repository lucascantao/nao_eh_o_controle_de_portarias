@extends('app')
@section('title', 'usuarios')
@section('content')

<div class="bg-white p-1">
    <i class="bi bi-people-fill"></i>
    Editar Usuário
</div>

<div class="bg-white m-4 px-4 py-4">
    <span><i class="bi bi-search me-2"></i></span>Informações de Usuário
    <hr>
    <form action="{{route('user.update', ['user' => $user])}}" method="POST">
        @csrf
        @method('put')
        <div class="row row-cos-6">
            <div class="col-6">
                <label for="usuario_nome" class="form-label">Nome</label>
                <input id="usuario_nome" type="text" name="name" class="form-control" value="{{$user->name}}">
            </div>
            {{-- <div class="col-6">
                <label for="usuario_email" class="form-label">Usuario</label>
                <input id="" type="text" class="form-control">
            </div> --}}
            <div class="col-6">
                <label for="usuario_nome" class="form-label">Setor</label>
                <select id="usuario_setor" class="form-select" name="setor_id">
                    <option selected hidden>Selecionar Setor</option>
                    @foreach ($setores as $setor)
                    @if ($setor->id == $user->setores->id)
                        <option selected name="{{$setor->sigla}}" value="{{$setor->id}}" id="">{{$setor->sigla}}</option>
                    @else
                        <option name="{{$setor->sigla}}" value="{{$setor->id}}" id="">{{$setor->sigla}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <label for="usuario_perfil" class="form-label">Perfil</label>
                <select id="usuario_perfil" class="form-select" name="perfil_id">
                    <option selected hidden value="null">Selecionar pefil</option>
                    @foreach ($perfis as $perfil)
                    @if ($perfil->id == $user->perfil->id)
                        <option selected name="{{$perfil->nome}}" value="{{$perfil->id}}" id="">{{$perfil->nome}}</option>
                    @else
                        <option name="{{$perfil->nome}}" value="{{$perfil->id}}" id="">{{$perfil->nome}}</option>
                    @endif
                        
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <label for="usuario_email" class="form-label">Email</label>
                <input id="usuario_email" type="text" name="email" class="form-control" value="{{$user->email}}">
            </div>
        </div>
        <div class="col-6">
            <button class="btn btn-success mt-4" type="submit">Salvar usuário</button>
        </div>
    </form>
    
</div>

<script>
    
</script>
@endsection    
