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
        <div id="perfil-estatisticas-grid">
            <div class="perfil-relatorio-cartao">
                <h3 class="perfil-relatorio-valor">45</h3>
                <p class="relatorio-titulo">Corridas</p>
            </div>
            <div class="perfil-relatorio-cartao">
                <h3 class="perfil-relatorio-valor">280</h3>
                <p class="perfil-relatorio-titulo">Distância total (km/h)</p>
            </div>
            <div class="perfil-relatorio-cartao">
                <h3 class="perfil-relatorio-valor">85</h3>
                <p class="relatorio-titulo">RPM</p>
            </div>
            <div class="perfil-relatorio-cartao">
                <h3 class="perfil-relatorio-valor">347</h3>
                <p class="relatorio-titulo">Calorias</p>
            </div>
        </div>
    </section>
    <section class="botoes">
        <a href="#" id="botao-compartilhar">Compartilhar</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" id="botao-sair">Sair</button>
        </form>
    </section>
</main>
@endsection