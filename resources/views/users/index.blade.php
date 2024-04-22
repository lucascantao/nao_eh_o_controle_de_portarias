@extends('app')
@section('title', 'usuarios')
@section('content')

<div class="bg-white p-1">
    <i class="bi bi-people-fill"></i>
    Gerenciar Usuarios
</div>

<div class="bg-white m-4 px-4 py-4">
    <span><i class="bi bi-search me-2"></i></span>Cadastrar Usuário
    <hr>
    <div class="row row-cos-6">
        <div class="col-6">
            <label for="usuario_nome" class="form-label">Nome</label>
            <input id="usuario_nome" type="text" class="form-control">
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
    <span>Listagem de Registros</span>
    <hr>
    <table id="usuario_table" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Setor</th>
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
                <td>{{$user->setores->sigla}}</td>
                @if ($user->perfil_id != null)
                <td>{{$user->perfil->nome}}</td>
                <td class="text-success">Habilitado</td>
                @else
                <td>-</td>
                <td class="text-warning">Desabilitado</td>
                @endif
                <td class="text-center">
                    <a class="btn btn-warning me-2" href="{{route('user.edit', ['user' => $user])}}"><span><i class="bi bi-pencil-fill"></i></span></a>
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

    $('tr').on('click', function() {
        var name = $(this).children()[0].innerText;
        var email = $(this).children()[1].innerText;
        var setor = $(this).children()[2].innerText;
        var setor_val = $('#usuario_setor').find(`option[name=${setor}]`).val();
        var perfil = $(this).children()[3].innerText;
        var perfil_val = $('#usuario_perfil').find(`option[name=${perfil}]`).val();
        $('#usuario_nome').val(name);
        $('#usuario_setor').val(setor_val);
        $('#usuario_perfil').val(perfil_val);
        $('#usuario_email').val(email);
        // console.log($('#usuario_setor').find(`option[name=${setor}]`).val())

    })
</script>
@endsection    
