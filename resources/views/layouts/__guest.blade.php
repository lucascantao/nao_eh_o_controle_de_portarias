<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Não é Controle de Portarias</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Local style -->
        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Datatables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>
    <body>
        <main class="d-flex flex-nowrap">
            <div id="content" class="border">
                @yield('content')
            </div>
        </main>

        @include('layouts.components.footer')
    </body>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script>

        // TABELA SETOR
        var setor_table = $('#setor_table').DataTable({

            // Tradução
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/pt-BR.json',
            },
            columnDefs: [
                {target: 0, visible: false},
                {target: 3, orderable: false},
            ],
            fixedHeader: {
                header:true,
                footer: true,
            },
            // Remover controles padrão
            layout: {
                topEnd: null
            }
        });
                
        // Pesquisa por Sigla -> coluna 1
        $('#setor_sigla').on('keyup', function() {
            setor_table.column(1).search(this.value).draw();
        })

        // Pesquisa por nome -> coluna 2
        $('#setor_nome').on('keyup', function() {
            setor_table.column(2).search(this.value).draw();
        })
        // TABELA SETOR END

        // TABELA ASSUNTO
        var assunto_table = $('#assunto_table').DataTable({

        // Tradução
        language: {
            url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/pt-BR.json',
        },
        columnDefs: [
            {target: 0, visible: false},
            {target: 3, orderable: false},
        ],
        fixedHeader: {
            header:true,
            footer: true,
        },
        // Remover controles padrão
        layout: {
            topEnd: null
        }
        });

        $('#assunto_nome').on('keyup', function() {
            assunto_table.column(1).search(this.value).draw();
        })
        // TABELA ASSUNTO END
    </script>
</html>
