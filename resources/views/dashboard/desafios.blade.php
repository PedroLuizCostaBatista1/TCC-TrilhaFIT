@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/desafios.css">
@endpush
<header>
    <h1 id="titulo">Desafios</h1>
    <div id="timer">
        <span class="material-symbols-outlined" id="timer-icone">schedule</span>
        <p id="timer-texto">Novos desafios em: <strong>2d 14h 0m</strong></p>
    </div>
</header>
<main class="tela">
    <div id="card-vermelho">
        <div class="card-header">
            <div>
                <h3 class="card-titulo">Corrida Rápida</h3>
                <p class="card-descricao">Termine a corrida em 30 minutos</p>
            </div>
            <p id="card-experiencia-vermelho">+50 XP</p>
        </div>
        <div class="card-progresso">
            <div class="card-progresso-informacoes">
                <p class="card-progresso-titulo">Progresso</p>
                <p id="card-progresso-valor-vermelho">18/30 min</p>
            </div>
            <div class="card-barra-progresso">
                <div id="card-barra-vermelho"></div>
            </div>
        </div>
        <p class="card-progresso-texto">Faltam 12 minutos para completar</p>
    </div>
    <div id="card-verde">
        <div class="card-header">
            <div>
                <h3 class="card-titulo">Coletor de Moedas</h3>
                <p class="card-descricao">Colete 100 moedas no trajeto</p>
            </div>
            <p id="card-experiencia-verde">+75 XP</p>
        </div>
        <div class="card-progresso">
            <div class="card-progresso-informacoes">
                <p class="card-progresso-titulo">Progresso</p>
                <p id="card-progresso-valor-verde">87/100 moedas</p>
            </div>
            <div class="card-barra-progresso">
                <div id="card-barra-verde"></div>
            </div>
        </div>
        <p class="card-progresso-texto">Faltam 13 moedas para completar</p>
    </div>
    <div id="card-azul">
        <div class="card-header">
            <div>
                <h3 class="card-titulo">Queimador de Calorias</h3>
                <p class="card-descricao">Queime 500 calorias no treino</p>
            </div>
            <p id="card-experiencia-azul">+100 XP</p>
        </div>
        <div class="card-progresso">
            <div class="card-progresso-informacoes">
                <p class="card-progresso-titulo">Progresso</p>
                <p id="card-progresso-valor-azul">347/500 kcal</p>
            </div>
            <div class="card-barra-progresso">
                <div id="card-barra-azul"></div>
            </div>
        </div>
        <p class="card-progresso-texto">Faltam 153 calorias para completar</p>
    </div>
    <div id="card-roxo">
        <div class="card-header">
            <div>
                <h3 class="card-titulo">Maratona Matinal</h3>
                <p class="card-descricao">Pedal por 60 minutos seguidos</p>
            </div>
            <p id="card-experiencia-roxo">✓ Concluído</p>
        </div>
        <div class="card-progresso">
            <div class="card-progresso-informacoes">
                <p class="card-progresso-titulo">Progresso</p>
                <p id="card-progresso-valor-roxo">60/60 min</p>
            </div>
            <div class="card-barra-progresso">
                <div id="card-barra-roxo"></div>
            </div>
        </div>
        <p class="card-progresso-texto">Desafio completado! 🎉</p>
    </div>
</main>
@endsection