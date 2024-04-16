@extends('app')
@section('title', 'assuntos')
@section('content')

<div class="bg-white p-1">
    <i class="bi bi-chat-square-quote-fill"></i>
    Assuntos
</div>

<div class="bg-white m-4 px-4 py-4">
    <span><i class="bi bi-search me-2"></i></span>Pesquisar assunto
    <hr>
    <div class="row row-cos-6">
        <div class="col-10">
            <label for="assunto_nome" class="form-label">Nome</label>
            <input id="assunto_nome" type="text" class="form-control text-uppercase">
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
    <span>Relação de Assuntos</span>
    <hr>
    <a class="btn btn-primary mb-2" href="{{route('assunto.create')}}" role="button">Cadastrar novo assunto</a>
    <table id="assunto_table" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col" class="text-center col-2">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assuntos as $assunto)
            <tr>
                <td>{{$assunto->id}}</td>
                <td>{{$assunto->nome}}</td>
                <td>{{$assunto->descricao}}</td>
                <td class="text-center">
                    <a class="btn btn-warning me-2" href="{{route('assunto.edit', ['assunto' => $assunto])}}"><span><i class="bi bi-pencil-fill"></i></span></a>
                    <a class="btn btn-danger me-2" href="{{route('assunto.destroy', ['assunto' => $assunto])}}"><span><i class="bi bi-trash-fill"></i></span></a>
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
