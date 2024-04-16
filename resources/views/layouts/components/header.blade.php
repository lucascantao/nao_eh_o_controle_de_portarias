<nav class="navbar navbar-expand-lg sticky-top py-3 bg-white">
    <div class="d-flex justify-content-between align-items-center w-100">
        <span id="logo" ><a href="/"><img src="{{asset('images/SiCop-v1.png')}}" width="128px" alt=""></a></span>
        <span id="titulo" class="fs-5" style="font-weight: bold"><span style="font-weight: normal" class="text-secondary">Não é </span>Controle de Portaria</span>
        <div class="me-3">
            <a href="{{route('profile.edit')}}">
                <i class="bi bi-person-circle"></i>
                <span style="font-weight: bold; font-size: 14px">{{ Auth::user()->name }}</span>
            </a>
            <a id="button" class="btn btn-primary px-4 py-1" href="{{route('logout')}}">Sair</a>
        </div>
    </div>
</nav>