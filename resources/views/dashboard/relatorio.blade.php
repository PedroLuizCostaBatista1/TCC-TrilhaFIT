@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/relatorio.css">
@endpush
<main>
    <header>
        <h1>Última sessão</h1>
        <div>
            <span id="mural-icone" class="material-symbols-outlined">schedule</span>
            <p>Hoje às 14:30</p>
        </div>
    </header>
    <section id="relatorio">
        <div class="card">
            <p class="card-titulo">RPM</p>
            <p class="card-valor">85</p>
            <p class="card-tipo">rotações/min</p>
        </div>
        <div class="card">
            <p class="card-titulo">Distância</p>
            <p class="card-valor">12.5</p>
            <p class="card-tipo">quilômetros</p>
        </div>
        <div class="card">
            <div class="card-titulo">
                <span id="mural-icone" class="material-symbols-outlined">mode_heat</span>
                <p>Calorias</p>
            </div>
            <h3 class="card-valor">347 <span>kcal</span></h3>
        </div>
        <div class="card">
            <div class="card-titulo">
                <span id="mural-icone" class="material-symbols-outlined">speed</span>
                <p>Vel. Média</p>
            </div>
            <h3 class="card-valor">16.70 <span>km/h</span></h3>
        </div>
    </section>
    <section id="botoes">
        <a href="#" id="botao-compartilhar">Compartilhar</a>
        <a href="#" id="botao-exportar">Exportar</a>
    </section>
</main>
@endsection