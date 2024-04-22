@extends('app')
@section('title', 'usuarios')
@section('content')

<div class="bg-white p-1">
    <i class="bi bi-people-fill"></i>
    Gerenciar Usuarios
</div>

<div class="bg-white m-4 px-4 py-4">
    <span><i class="bi bi-search me-2"></i></span>Pesquisar usuario
    <hr>
    <div class="row row-cos-6">
        <div class="col-6">
            <label for="usuario_nome" class="form-label">Nome</label>
            <input id="usuario_nome" type="text" class="form-control">
        </div>
        <div class="col-6">
            <label for="usuario_email" class="form-label">Email</label>
            <input id="usuario_email" type="text" class="form-control">
        </div>
    </div>
    
</div>

<div class="bg-white m-4 px-4 py-2">
    <div>
        @if(session()->has('success'))
            <div class="alert alert-success" id="successMessage">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <span>Relação de Usuários</span>
    <hr>
    <table id="usuario_table" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Perfil</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center col-2">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->perfil_id}}</td>
                @if ($user->perfil_id != null)
                <td class="text-success">Habilitado</td>
                @else
                <td class="text-warning">Desabilitado</td>
                @endif
                <td class="text-center">
                    @if ($user->perfil_id == null)
                    <a class="btn btn-warning me-2" href="">Habilitar</a>
                    @endif
                    {{-- <a class="btn btn-danger me-2" href=""><span><i class="bi bi-trash-fill"></i></span></a> --}}
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

<!-- Script para sumir mensagem de confirmação -->
<script>
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 2000);
</script>
@endsection    
