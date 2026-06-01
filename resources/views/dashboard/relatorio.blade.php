@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/relatorio.css">
@endpush
@push("scripts")
    <script src="/assets/js/dashboard/relatorio.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush
<main>
    <header>
        <h1>Última sessão</h1>
        <div>
            <span id="header-icone" class="material-symbols-outlined">schedule</span>
            <p>{{ Auth::user()->estatistica->updated_at->calendar() }}</p>
        </div>
    </header>
    <section id="relatorio">
        <div class="card">
            <span class="material-symbols-outlined">directions_bike</span>
            <h3 class="card-valor">{{ Auth::user()->estatistica->corridas }}</h3>
            <p class="card-titulo">Corridas</p>
        </div>
        <div class="card">
            <span class="material-symbols-outlined">sync</span>
            <h3 class="card-valor">{{ Auth::user()->estatistica->rpm }} <span>rot/min</span></h3>
            <p class="card-titulo">RPM Média</p>
        </div>
        <div class="card">
            <span class="material-symbols-outlined">distance</span>
            <h3 class="card-valor">{{ number_format(Auth::user()->estatistica->distancia, 2, ',', '.') }} <span>km</span></h3>
            <p class="card-titulo">Distância</p>
        </div>
        <div class="card">
            <span class="material-symbols-outlined">speed</span>
            <h3 class="card-valor">{{ number_format(Auth::user()->estatistica->velocidade, 2, ',', '.') }} <span>km/h</span></h3>
            <p class="card-titulo">Vel. Média</p>
        </div>
        <div class="card card-cheio">
            <span id="mural-icone" class="material-symbols-outlined">mode_heat</span>
            <h3 class="card-valor">{{ number_format(Auth::user()->estatistica->calorias, 2, ',', '.') }} <span>kcal gastas</span></h3>
            <p class="card-titulo">Calorias queimadas</p>
        </div>
    </section>
    <section id="chart">
        <span id="mural-icone" class="material-symbols-outlined">chart_data</span>
        <h3>Ritmo de Velocidade (Sessão)</h3>
        <canvas id="chartVelocidade"></canvas>
    </section>
    <section id="botoes">
        <a href="#" id="botao-compartilhar">Compartilhar</a>
        <a href="#" id="botao-exportar">Exportar</a>
    </section>
</main>
@endsection