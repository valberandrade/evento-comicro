<header class="fixed-top">

    <!----------- TOPBAR ------------>
    <section class="container-fluid topbar d-flex align-items-center">

        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-center">
                <div class="date d-flex align-items-center justify-content-center mb-1 mb-md-0 pt-2 pt-md-0">
                    <img src="{{ asset('img/icone-calendario.svg') }}" width="24" height="24" alt="Do dia 16 a 18 de Novembro" title="Do dia 16 a 18 de Novembro" class="me-2" /> 16, 17 e 18 de Novembro de 2023
                </div>
                <div class="divider d-none d-md-flex"></div>
                <div class="location d-flex align-items-center justify-content-center pb-2 pb-md-0">
                    <img src="{{ asset('img/location.svg') }}" width="24" height="24" alt="Centro de Convenções - Recife" title="Centro de Convenções - Recife" class="me-1" /> Centro de Convenções de Pernambuco
                </div>
            </div>
        </div>

    </section>

    <!----------- HEADER ------------>
    <nav class="navbar navbar-expand-lg shadow-lg">
        <div class="container-fluid container-lg">
            <a class="navbar-brand" href="{{ route('front.index') }}">
                <img src="{{ asset('img/logo.svg') }}" alt="{{ config('app.name', 'Evento Comicro') }}" title="{{ config('app.name', 'Evento Comicro') }}" width="162" height="43" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto py-4 py-lg-0 text-center">
                    <li class="nav-item">
                        <a href="{{ route('front.index') }}/#sobre" class="nav-link" id="btn-sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.index') }}/#evento" class="nav-link" id="btn-evento">O Evento</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.index') }}/#programacao" class="nav-link" id="btn-programacao">Programação</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Expositores</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('front.quero-expor') }}">Quero Expor</a></li>
                            <li><a class="dropdown-item" href="{{ route('front.expositores') }}">Mapa do Evento</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.index') }}/#data-local" class="nav-link" id="btn-data">Data e Local</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('front.index') }}/#contato" class="nav-link" id="btn-contatos">Contatos</a>
                    </li>
                </ul>
                <div class="d-flex mb-4 mb-lg-0 justify-content-center justify-content-lg-end">
                    <a href="https://www.sympla.com.br/evento/comicro-conectando-negocios/2157093" class="btn btn-info btn-inscricao" target="_blank">INSCREVA-SE</a>
                </div>
            </div>
        </div>
    </nav>
</header>
