@extends("index")
@section("conteudo")
    <main class="tela">
        <header>
            <figure id="logo">
                <i data-lucide="user" id="icone-usuario"></i>
            </figure>
            <h1 id="titulo-perfil">Olá, Java man!</h1>
            <a href="#" id="botao-editar-conta"><i data-lucide="pen-line"></i>Editar conta</a>
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
            <a href="/" id="botao-sair">Sair</a>
        </section>
    </main>
@endsection