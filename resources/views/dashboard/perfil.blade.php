@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/perfil.css">
@endpush
@push("scripts")
    <script src="/assets/js/dashboard/perfil.js" defer></script>
@endpush
<main>
    <header>
        <figure>
            <span id="icone" class="material-symbols-outlined">person</span>
        </figure>
        <h1>Olá, {{ Auth::user()->nome }}!</h1>
        @if (!blank(Auth::user()->academia))
            <p id="academia"><span class="material-symbols-outlined icone-campo">location_on</span>{{ Auth::user()->academia }}</p>
        @endif
        <a href="{{ route('perfil-editar') }}" id="editar-conta">
            <span id="editar-conta-icone" class="material-symbols-outlined">edit</span>
            <span>Editar conta</span>
        </a>
    </header>
    <section id="estatisticas">
        <div id="estatisticas-header">
            <h2 id="subtitulo">Estatísticas</h2>
            <p id="estatisticas-data" data-mes="{{ $mesAnterior->addMonth()->month }}" data-ano="{{ $ano }}" data-url="{{ route('perfil') }}">
                <button type="button" onclick="mudarMes(-1)">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>

                <span id="texto-mes-ano">{{ $nomeMes }} - {{ $ano }}</span>

                <button type="button" onclick="mudarMes(1)">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>

                <!--<a href="{{ route('perfil', ['mes' => $mesAnterior->month, 'ano' => $mesAnterior->year]) }}">
                    <span class="material-symbols-outlined">chevron_left</span>
                </a>
                <span>{{ $nomeMes }} - {{ $ano }}</span>
                <a href="{{ route('perfil', ['mes' => $proximoMes->month, 'ano' => $proximoMes->year]) }}">
                    <span class="material-symbols-outlined">chevron_right</span>
                </a>-->
            </p>
        </div>
        <div id="estatisticas-grid">
            <div class="relatorio-cartao relatorio-cartao-full">
                <span class="material-symbols-outlined relatorio-cartao-icone">distance</span>
                <h3 class="relatorio-valor">{{ number_format(Auth::user()->estatistica->distancia, 2, ',', '.') }}<span class="relatorio-medida">km</span></h3>
                <p class="relatorio-titulo">Distância total</p>
            </div>
            <div class="relatorio-cartao">
                <span class="material-symbols-outlined relatorio-cartao-icone">directions_bike</span>
                <h3 class="relatorio-valor">{{ Auth::user()->estatistica->corridas }}</h3>
                <p class="relatorio-titulo">Corridas</p>
            </div>
            <div class="relatorio-cartao">
                <span class="material-symbols-outlined relatorio-cartao-icone">speed</span>
                <h3 class="relatorio-valor">{{ number_format(Auth::user()->estatistica->velocidade, 2, ',', '.') }} <span class="relatorio-medida">km/h</span></h3>
                <p class="relatorio-titulo">Velocidade Média</p>
            </div>
            <div class="relatorio-cartao relatorio-cartao-full">
                <span class="material-symbols-outlined relatorio-cartao-icone">mode_heat</span>
                <h3 class="relatorio-valor">{{ number_format(Auth::user()->estatistica->calorias, 2, ',', '.') }} <span class="relatorio-medida">kcal</span></h3>
                <p class="relatorio-titulo">Calorias Queimadas</p>
            </div>
        </div>
    </section>
    <section class="botoes">
        <button id="botao1" onclick="compartilhar({{ Auth::user()->estatistica['distancia'] }}, {{ Auth::user()->estatistica['corridas'] }}, {{ Auth::user()->estatistica['calorias'] }}, '{{ $nomeMes }}', {{ $ano }});">
            <span class="material-symbols-outlined">share</span>
            <span>Compartilhar</span>
        </button>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" id="botao2" texto-carregando="Saindo...">
                <span class="material-symbols-outlined">logout</span>
                <span>Sair</span>
            </button>
        </form>
    </section>
</main>
@endsection