@extends('app')
@section('title', 'portarias')
@section('content')
    <div class="bg-white p-1">
        <i class="bi bi-clipboard-fill"></i>
        Consultar
    </div>
    <div>
        <div class="bg-white m-4 px-4 py-2">
            <span>Filtro da pesquisa</span>
            <hr>
            <div id="filtro" class="row">
                <div class="col-lg-3 col-md-4">
                    <label class="form-label" for="Portaria">Portaria: </label>
                    <input class="form-control" type="text" placeholder="Ex.: 0096">
                </div>
                <div class="col-lg-3 col-md-4">
                    <label class="form-label" for="Portaria">Assunto: </label>
                    <select class="form-select" name="assunto" id="assunto">
                        @foreach ($assuntos as $assunto)
                            <option selected hidden>Selecionar assunto</option>
                            <option name="{{$assunto->nome}}" id="">{{$assunto->nome}}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="col-lg-3 col-md-4">
                    <label class="form-label" for="Portaria">Status: </label>
                    <select class="form-select" name="status" id="">
                        <option selected hidden>Selecionar status</option>
                        <option value="registrado">Registrado</option>
                        <option value="excluido">Excluído</option>
                    </select>
                </div>

                <div class="w-100"></div>

                <div class="col-lg-6 col-md-4">

                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="Portaria">Data: </label>
                            <input class="form-control" type="date" id="date_start" name="date_start">
                        </div>
                        <div class="col">
                            <label class="form-label" for="Portaria">Até: </label>
                            <input class="form-control" type="date" id="date_end" name="date_end">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12">
                    <label class="form-label" for="Setor">Setor: </label>
                    <select class="form-select" name="setor" id="setor">
                        @foreach ($setores as $setor)
                            <option selected hidden>Selecionar setor</option>
                            <option name="{{$setor->nome}}" id="">{{$setor->nome}}</option>
                        @endforeach
                        
                    </select>
                </div>

                <div>
                    <button id="button_clear" class="btn btn-warning mt-4">Limpar</button>
                </div>
            </div>
        </div>
        <div class="bg-white m-4 px-4 py-2">
            content
        </div>
    </div>

    <script>
        $('#button_clear').on('click', function() {
            $('#filtro select').each( function () {
                $(this).val($(this).find('option[selected]').val());
            })
            $('#filtro input').each(function() {
                $(this).val('');
            })
        })
    </script>
@endsection