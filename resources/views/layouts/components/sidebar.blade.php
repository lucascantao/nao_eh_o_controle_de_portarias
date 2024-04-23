<div class="d-flex flex-column fixed-top" id="sidebar">
    <div class="d-flex justify-content-between align-middle p-3 text-white">
        MENU
    </div>
    <ul class="nav nav-pills flex-column">
        <li>
            <a href="" class="nav-link text-white align-middle">
                <i class="bi bi-clipboard-fill"></i>
                <span>Registrar Portaria</span></a>
        </li>
        <li>
            <a href="{{route('portaria.search')}}" class="nav-link text-white align-middle">
                <i class="bi bi-search"></i>
                <span>Consultar</span></a>
        </li>
        <li>
            <a href="" class="nav-link text-white align-middle">
                <i class="bi bi-file-text-fill"></i>
                <span>Relatório</span></a>
        </li>

        @if (Auth::user()->perfil_id != 1)

        @if (Auth::user()->perfil_id == 3)
        <li>
            <a href="{{route('setor.index')}}" class="nav-link text-white align-middle">
                <i class="bi bi-archive-fill"></i>
                <span>Setores</span>
                <span 
                style="color: orange; font-size: 14px; margin-left: 2px;"
                >{{Auth::user()->perfil->nome}}</span>
            </a>
        </li>
        <li>
            <a href="{{route('assunto.index')}}" class="nav-link text-white align-middle">
                <i class="bi bi-chat-square-quote-fill"></i>
                <span>Assuntos</span>
                <span 
                style="color: orange; font-size: 14px; margin-left: 2px;"
                >{{Auth::user()->perfil->nome}}</span>
            </a>
        </li>

        @endif
        <li>
            <a href="{{route('user.index')}}" class="nav-link text-white align-middle">
                <i class="bi bi-people-fill"></i>
                <span>Gerenciar Perfis</span>
                <span 
                style="color: orange; font-size: 14px; margin-left: 2px;"
                >{{Auth::user()->perfil->nome}}</span>
            </a>
        </li>

        @endif
    </ul>
</div>