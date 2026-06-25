@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/desafios.css">
@endpush
@push("scripts")
    <script src="/assets/js/dashboard/desafios.js" defer></script>
@endpush
<main class="tela">
    <header>
        <div id="timer-info">
            <span class="material-symbols-outlined" id="timer-icone">schedule</span>
            <p id="timer-texto">Novos desafios em</p>
        </div>
        <h1 id="timer" data-tempoMilisegundos="{{ $tempoMilisegundos }}"></h1>
    </header>
    <section id="desafios-container">
        <div class="desafio-card">
            <div class="desafio-card-header">
                <div class="desafio-card-titulo">
                    <span class="material-symbols-outlined desafio-card-icone-corrida">bolt</span>
                    <div>
                        <h3>Corrida Rápida</h3>
                        <p>Termine a corrida em 30 minutos</p>
                    </div>
                </div>
                <p class="desafio-card-xp-corrida">+50 XP</p>
            </div>
            <div class="desafio-card-body">
                <div class="barra-progresso-fundo">
                    <div class="barra-progresso-corrida"></div>
                </div>
                <div class="barra-progresso-informacoes">
                    <p>Progresso</p>
                    <p>18/30 min</p>
                </div>
            </div>
        </div>
        <div class="desafio-card">
            <div class="desafio-card-header">
                <div class="desafio-card-titulo">
                    <span class="material-symbols-outlined desafio-card-icone-coletavel">database</span>
                    <div>
                        <h3>Coletor de Moedas</h3>
                        <p>Colete 100 moedas no trajeto</p>
                    </div>
                </div>
                <p class="desafio-card-xp-coletavel">+75 XP</p>
            </div>
            <div class="desafio-card-body">
                <div class="barra-progresso-fundo">
                    <div class="barra-progresso-coletavel"></div>
                </div>
                <div class="barra-progresso-informacoes">
                    <p>Progresso</p>
                    <p>87/100 moedas</p>
                </div>
            </div>
        </div>
        <div class="desafio-card">
            <div class="desafio-card-header">
                <div class="desafio-card-titulo">
                    <span class="material-symbols-outlined desafio-card-icone-calorias">mode_heat</span>
                    <div>
                        <h3>Queimador de Calorias</h3>
                        <p>Queime 500 calorias no treino</p>
                    </div>
                </div>
                <p class="desafio-card-xp-calorias">+100 XP</p>
            </div>
            <div class="desafio-card-body">
                <div class="barra-progresso-fundo">
                    <div class="barra-progresso-calorias"></div>
                </div>
                <div class="barra-progresso-informacoes">
                    <p>Progresso</p>
                    <p>347/500 kcal</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection