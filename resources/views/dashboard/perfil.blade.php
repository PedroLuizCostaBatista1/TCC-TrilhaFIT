@extends("dashboard/config")
@section("conteudo")
<main class="tela">
    <header id="perfil-header">
        <figure id="perfil-logo">
            <span id="perfil-icone" class="material-symbols-outlined">person</span>
        </figure>
        <h1 id="perfil-titulo">Olá, {{ Auth::user()->nome }}!</h1>
        <a href="#" id="perfil-editar-conta"><span class="material-symbols-outlined">person_edit</span>Editar conta</a>
    </header>
    <section id="estatisticas">
        <h2 id="subtitulo-perfil">Estatísticas</h2>
        <div id="perfil-relatorio">
            <div class="relatorio-cartao">
                <h3 class="relatorio-valor">45</h3>
                <p class="relatorio-titulo">Corridas</p>
            </div>
            <div class="relatorio-cartao">
                <h3 class="relatorio-valor">280km</h3>
                <p class="relatorio-titulo">Distância total</p>
            </div>
            <div class="relatorio-cartao">
                <h3 class="relatorio-valor">85</h3>
                <p class="relatorio-titulo">RPM</p>
            </div>
            <div class="relatorio-cartao">
                <h3 class="relatorio-valor">347kcal</h3>
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