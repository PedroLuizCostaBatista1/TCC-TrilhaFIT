@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/perfil.css">
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
        <a href="#" id="editar-conta"><span id="editar-conta-icone" class="material-symbols-outlined">edit</span>Editar conta</a>
    </header>
    <section id="estatisticas">
        <div id="estatisticas-header">
            <h2 id="subtitulo">Estatísticas</h2>
            <p id="estatisticas-data"><span class="material-symbols-outlined">chevron_left</span>Abril - 2026<span class="material-symbols-outlined">chevron_right</span></p>
        </div>
        <div id="estatisticas-grid">
            <div class="relatorio-cartao relatorio-cartao-full">
                <span class="material-symbols-outlined relatorio-cartao-icone">distance</span>
                <h3 class="relatorio-valor">{{ number_format(Auth::user()->estatistica->distancia, 2, ',', '.') }} <span class="relatorio-medida">km</span></h3>
                <p class="relatorio-titulo">Distância total</p>
            </div>
            <div class="relatorio-cartao">
                <span class="material-symbols-outlined relatorio-cartao-icone">directions_bike</span>
                <h3 class="relatorio-valor">{{ Auth::user()->estatistica->corridas }}</h3>
                <p class="relatorio-titulo">Corridas</p>
            </div>
            <div class="relatorio-cartao">
                <span class="material-symbols-outlined relatorio-cartao-icone">sync</span>
                <h3 class="relatorio-valor">{{ number_format(Auth::user()->estatistica->rpm, 2, ',', '.') }} <span class="relatorio-medida">km/h</span></h3>
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
        <button id="botao1"><span class="material-symbols-outlined">share</span>Compartilhar</button>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" id="botao2"><span class="material-symbols-outlined">logout</span>Sair</button>
        </form>
    </section>
</main>
@endsection