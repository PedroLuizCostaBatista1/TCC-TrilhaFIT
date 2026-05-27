@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/relatorio.css">
@endpush
<main class="tela">
    <header>
        <h1 id="titulo">Última sessão</h1>
        <p id="horario">Hoje às 14:30</p>
    </header>
    <section id="sessao">
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
            <p class="card-titulo">Calorias</p>
            <p class="card-valor">347</p>
            <p class="card-tipo">kcal queimadas</p>
        </div>
        <div class="card">
            <p class="card-titulo">Duração</p>
            <p class="card-valor">45</p>
            <p class="card-tipo">minutos</p>
        </div>
        <div class="card">
            <p class="card-titulo">Velocidade Média</p>
            <p class="card-valor">16.7</p>
            <p class="card-tipo">quilômetros</p>
        </div>
        <div class="card">
            <p class="card-titulo">Altitude Ganho</p>
            <p class="card-valor">245</p>
            <p class="card-tipo">metros</p>
        </div>
    </section>
    <section id="botoes">
        <a href="#" id="botao-compartilhar">Compartilhar</a>
        <a href="#" id="botao-exportar">Exportar</a>
    </section>
</main>
@endsection