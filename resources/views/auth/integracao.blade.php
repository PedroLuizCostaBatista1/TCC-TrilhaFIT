@extends("config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/auth/integracao.css">
@endpush
@push("scripts")
    <script src="/assets/js/auth/integracao.js" defer></script>
@endpush
<main class="tela">
    <header id="integracao-header">
        <div class="barra-progresso">
            <div class="progresso ativo"></div>
            <div class="progresso"></div>
            <div class="progresso"></div>
        </div>
    </header>
    <form method="POST" action="{{ route('integracao.salvar') }}" onsubmit="enviarFormulario(this, event);">
        <div class="etapa ativa" etapa="1">
            <h1 class="titulo">Qual a sua finalidade de uso?</h1>
            <div class="grid-opcoes">
                <label class="card-opcao">
                    <input type="radio" name="ambiente_treino" value="domestico" required>
                    <span class="material-symbols-outlined card-icone">home</span>
                    <strong>Uso Doméstico</strong>
                </label>
                <label class="card-opcao">
                    <input type="radio" name="ambiente_treino" value="academia">
                    <span class="material-symbols-outlined card-icone">exercise</span>
                    <strong>Academia</strong>
                </label>
            </div>
        </div>
        <div class="etapa" etapa="2">
            <h1 class="titulo">Qual o seu nível físico atual?</h1>
            <p>A intensidade dos desafios diarios vai se ajustar de acordo com o seu ritmo.</p>
            <div class="lista-opcoes">
                <label class="card-opcao-horizontal">
                    <input type="radio" name="nivel_fisico" value="iniciante" required style="display: none;">
                    <div class="card-icone-circulo">
                        <span class="material-symbols-outlined">mode_fan</span>
                    </div>
                    <strong>Iniciante</strong>
                </label>
                <label class="card-opcao-horizontal">
                    <input type="radio" name="nivel_fisico" value="intermediario" required style="display: none;">
                    <div class="card-icone-circulo">
                        <span class="material-symbols-outlined">directions_run</span>
                    </div>
                    <strong>Intermediário</strong>
                </label>
                <label class="card-opcao-horizontal">
                    <input type="radio" name="nivel_fisico" value="avancado" required style="display: none;">
                    <div class="card-icone-circulo">
                        <span class="material-symbols-outlined">bolt</span>
                    </div>
                    <strong>Avançado</strong>
                </label>
            </div>
        </div>
        <div class="etapa" etapa="3">
            <h1 class="titulo">Dados biométricos</h1>
            <p>Usados para calcular o gasto de energia dos desafios.</p>
            <div class="lista-opcoes">
                <div class="campo-container">
                    <span class="material-symbols-outlined icone-campo">weight</span>
                    <input type="number" name="peso" step="0.01" required placeholder="Seu peso atual (kg)">
                </div>
                <div class="campo-container">
                    <span class="material-symbols-outlined icone-campo">height</span>
                    <input type="number" name="altura" step="0.01" required placeholder="Sua altura atual (m)">
                </div>
            </div>
        </div>
        <div class="botoes-container">
            <button type="button" id="botaoAvancar" class="botao-avancar" onclick="navegarEtapa(1)" texto-carregando="Concluindo...">
                <span class="botao-texto">Avançar</span>
                <span id="botao-icone" class="material-symbols-outlined">chevron_right</span>
            </button>
            <button type="button" id="botaoVoltar" class="botao-voltar" onclick="navegarEtapa(-1)">
                <span class="material-symbols-outlined">chevron_left</span>
                <span>Voltar</span>
            </button>
        </div>
    </form>
</main>
@endsection