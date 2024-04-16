@extends('app')
@section('title', 'portarias')
@section('content')
    <div class="bg-white p-1">
        <i class="bi bi-archive-fill"></i>
        Setores
    </div>
    <div>
        <div class="bg-white m-2 px-4 py-2" style="height: 85vh;">
            <div>
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <span>Cadastro</span>
            <hr>
        
            <form method="post" action="{{route('setor.store')}}">
            @csrf
            @method('post')
                <div class="row mb-3">
                    <div class="col-3 mb-3">
                        <label for="sigla" class="form-label">Sigla <span style="color: red"> *</span></label>
                        <input type="text" name="sigla" class="form-control" style="text-transform: uppercase;">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="nome" class="form-label">Nome <span style="color: red"> *</span></label>
                        <input type="text" class="form-control" name="nome" style="text-transform: uppercase;">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        
        </div>
    </div>
@endsection