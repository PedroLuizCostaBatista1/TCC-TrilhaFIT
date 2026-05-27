@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/placar.css">
@endpush
<main class="tela">
    <header>
        <div id="header-titulo">
            <i data-lucide="clock" id="icone-header"></i>
            <p id="header-subtitulo">Reset Mensal</p>
        </div>
        <p id="tempo">15d 08h 42m</p>
        <p id="header-descricao">O placar será resetado no próximo mês</p>
    </header>
    <div id="posicao-usuario">
        <p id="posicao-usuario-titulo">Sua posição</p>
        <div id="posicao-usuario-informacoes">
            <div id="posicao-usuario-foto">
                <i data-lucide="user" id="posicao-usuario-icone"></i>
            </div>
            <p id="posicao-usuario-placar">8°</p>
            <p id="posicao-usuario-lugar">Lugar</p>
        </div>
    </div>
    <h1 id="placar-titulo">
        <i data-lucide="trending-up" id="placar-icone"></i>Ranking Geral
    </h1>
    <div id="placar-wrap">
        <div class="placar">
            <div class="placar-icone">🥇</div>
            <div class="placar-informacoes-wrap">
                <p class="placar-nome">Carlos Silva</p>
                <p class="placar-academia">Academia Power Gym</p>
            </div>
            <div class="placar-experiencia">
                <p class="placar-experiencia-valor">2840</p>
                <p class="placar-experiencia-nome">XP</p>
            </div>
        </div>
        <div class="placar">
            <div class="placar-icone">🥈</div>
            <div class="placar-informacoes-wrap">
                <p class="placar-nome">Maria Santos</p>
                <p class="placar-academia">Studio Bike Elite</p>
            </div>
            <div class="placar-experiencia">
                <p class="placar-experiencia-valor">2620</p>
                <p class="placar-experiencia-nome">XP</p>
            </div>
        </div>
        <div class="placar">
            <div class="placar-icone">🥉</div>
            <div class="placar-informacoes-wrap">
                <p class="placar-nome">Pedro Oliveira</p>
                <p class="placar-academia">Bike Club Centro</p>
            </div>
            <div class="placar-experiencia">
                <p class="placar-experiencia-valor">2480</p>
                <p class="placar-experiencia-nome">XP</p>
            </div>
        </div>
        <div class="placar">
            <div class="placar-icone">4º</div>
            <div class="placar-informacoes-wrap">
                <p class="placar-nome">Ana Costa</p>
                <p class="placar-academia">Fitness Village</p>
            </div>
            <div class="placar-experiencia">
                <p class="placar-experiencia-valor">2350</p>
                <p class="placar-experiencia-nome">XP</p>
            </div>
        </div>
        <div class="placar">
            <div class="placar-icone">5º</div>
            <div class="placar-informacoes-wrap">
                <p class="placar-nome">Lucas Martins</p>
                <p class="placar-academia">Centro Ciclismo</p>
            </div>
            <div class="placar-experiencia">
                <p class="placar-experiencia-valor">2180</p>
                <p class="placar-experiencia-nome">XP</p>
            </div>
        </div>
        <div class="placar">
            <div class="placar-icone">6º</div>
            <div class="placar-informacoes-wrap">
                <p class="placar-nome">Fernanda Lima</p>
                <p class="placar-academia">Sports Academy</p>
            </div>
            <div class="placar-experiencia">
                <p class="placar-experiencia-valor">1890</p>
                <p class="placar-experiencia-nome">XP</p>
            </div>
        </div>
        <div class="placar">
            <div class="placar-icone">7º</div>
            <div class="placar-informacoes-wrap">
                <p class="placar-nome">Roberto Gomes</p>
                <p class="placar-academia">Bike Trail Park</p>
            </div>
            <div class="placar-experiencia">
                <p class="placar-experiencia-valor">1580</p>
                <p class="placar-experiencia-nome">XP</p>
            </div>
        </div>
        <div class="placar">
            <div class="placar-icone">8º</div>
            <div class="placar-informacoes-wrap">
                <p class="placar-nome">João Silva</p>
                <p class="placar-academia">Academia Fitness Plus</p>
            </div>
            <div class="placar-experiencia">
                <p class="placar-experiencia-valor">1250</p>
                <p class="placar-experiencia-nome">XP</p>
            </div>
        </div>
        <div class="placar">
            <div class="placar-icone">9º</div>
            <div class="placar-informacoes-wrap">
                <p class="placar-nome">Beatriz Rocha</p>
                <p class="placar-academia">Pedal Club</p>
            </div>
            <div class="placar-experiencia">
                <p class="placar-experiencia-valor">980</p>
                <p class="placar-experiencia-nome">XP</p>
            </div>
        </div>
        <div class="placar">
            <div class="placar-icone">10º</div>
            <div class="placar-informacoes-wrap">
                <p class="placar-nome">Gustavo Alves</p>
                <p class="placar-academia">Trail Bikes</p>
            </div>
            <div class="placar-experiencia">
                <p class="placar-experiencia-valor">750</p>
                <p class="placar-experiencia-nome">XP</p>
            </div>
        </div>
    </div>
</main>
@endsection