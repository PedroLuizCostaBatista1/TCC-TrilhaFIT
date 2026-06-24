@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/desafios.css">
@endpush
<main class="tela">
    <header>
        <div id="timer-info">
            <span class="material-symbols-outlined" id="timer-icone">schedule</span>
            <p id="timer-texto">Novos desafios em</p>
        </div>
        <p id="timer"><strong>2d 14h 32m</strong></p>
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
                <div class="barra-progresso-fundo"></div>
                <div class="barra-progresso-informacoes">
                    <p>Progresso</p>
                    <p>18/30 min</p>
                </div>
            </div>
        </div>
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
                <div class="barra-progresso-fundo"></div>
                <div class="barra-progresso-informacoes">
                    <p>Progresso</p>
                    <p>18/30 min</p>
                </div>
            </div>
        </div>
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
                <div class="barra-progresso-fundo"></div>
                <div class="barra-progresso-informacoes">
                    <p>Progresso</p>
                    <p>18/30 min</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection