@extends("dashboard/config")
@section("conteudo")
<main class="tela">
    <header id="perfil-header">
        <figure id="perfil-logo">
            <span id="perfil-icone" class="material-symbols-outlined">person</span>
        </figure>
        <h1 id="perfil-titulo">Olá, {{ Auth::user()->nome }}!</h1>
        @if (!blank(Auth::user()->academia))   
            <p id="perfil-academia"><span class="material-symbols-outlined icone-campo">location_on</span>{{ Auth::user()->academia }}</p>
        @endif
        <!--<a href="#" id="perfil-editar-conta"><span class="material-symbols-outlined">person_edit</span>Editar conta</a>-->
    </header>
    <section id="perfil-estatisticas">
        <h2 id="perfil-subtitulo">Estatísticas</h2>
        <p id="perfil-estatisticas-data">Abril - 2026</p>
        <div id="perfil-estatisticas-grid">
            <div class="perfil-relatorio-cartao">
                <h3 class="perfil-relatorio-valor">45</h3>
                <p class="perfil-relatorio-titulo"><span class="material-symbols-outlined">directions_bike</span>Corridas</p>
                <div class="perfil-linha"></div>
            </div>
            <div class="perfil-relatorio-cartao">
                <h3 class="perfil-relatorio-valor">280</h3>
                <p class="perfil-relatorio-titulo"><span class="material-symbols-outlined">distance</span>Distância total (km/h)</p>
                <div class="perfil-linha"></div>
            </div>
            <div class="perfil-relatorio-cartao">
                <h3 class="perfil-relatorio-valor">85</h3>
                <p class="perfil-relatorio-titulo"><span class="material-symbols-outlined">sync</span>Rotação por Minuto (RPM)</p>
                <div class="perfil-linha"></div>
            </div>
            <div class="perfil-relatorio-cartao">
                <h3 class="perfil-relatorio-valor">347</h3>
                <p class="perfil-relatorio-titulo"><span class="material-symbols-outlined">mode_heat</span>Calorias queimadas (kcal)</p>
            </div>
        </div>
    </section>
    <section class="botoes">
        <button class="botao1">Compartilhar</button>
        <form method="POST" action="">
            @csrf
            <button type="submit" class="botao1">Editar conta</button>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="botao1">Sair</button>
        </form>
    </section>
</main>
@endsection