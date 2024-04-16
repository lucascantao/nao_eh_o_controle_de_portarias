@extends('app')
@section('title', 'setores')
@section('content')

<div class="bg-white p-1">
    <i class="bi bi-archive-fill"></i>
    Setores
</div>

<div class="bg-white m-4 px-4 py-4">
    <span><i class="bi bi-search me-2"></i></span>Pesquisar setor
    <hr>
    <div class="row row-cos-6">
        <div class="col-2">
            <label for="setor_sigla" class="form-label">Sigla</label>
            <input id="setor_sigla" type="text" class="form-control text-uppercase">
        </div>
        <div class="col-10">
            <label for="setor_nome" class="form-label">Nome</label>
            <input id="setor_nome" type="text" class="form-control text-uppercase">
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
    <span>Relação de Setores</span>
    <hr>
    <a class="btn btn-primary mb-2" href="{{route('setor.create')}}" role="button">Cadastrar novo setor</a>
    <table id="setor_table" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sigla</th>
                <th scope="col">Nome</th>
                <th scope="col" class="text-center col-2">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($setores as $setor)
            <tr>
                <td>{{$setor->id}}</td>
                <td>{{$setor->sigla}}</td>
                <td>{{$setor->nome}}</td>
                <td class="text-center">
                    <a class="btn btn-warning me-2" href="{{route('setor.edit', ['setor' => $setor])}}"><span><i class="bi bi-pencil-fill"></i></span></a>
                    <a class="btn btn-danger me-2" href="{{route('setor.destroy', ['setor' => $setor])}}"><span><i class="bi bi-trash-fill"></i></span></a>
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
