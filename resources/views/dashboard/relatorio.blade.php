@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/relatorio.css">
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
            <div class="card-titulo">
                <span id="mural-icone" class="material-symbols-outlined">mode_heat</span>
                <p>Calorias queimadas</p>
            </div>
            <h3 class="card-valor">347 <span>kcal gastas</span></h3>
        </div>
    </section>
    <section id="botoes">
        <a href="#" id="botao-compartilhar">Compartilhar</a>
        <a href="#" id="botao-exportar">Exportar</a>
    </section>
</main>
@endsection