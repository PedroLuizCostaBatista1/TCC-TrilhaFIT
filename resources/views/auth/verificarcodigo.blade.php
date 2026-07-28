@extends("config")
@section("conteudo")
@push("scripts")
    <script src="/assets/js/auth/verificarcodigo.js" defer></script>
@endpush
    <main class="tela">
        <header class="anim-in">
            <a href="{{ route('trocar-senha') }}">
                <span class="material-symbols-outlined icone-voltar">chevron_left</span>
            </a>
            <h1 class="titulo">Código de Verificação</h1>
        </header>
        <form method="POST" action="{{ route('validar-codigo') }}" onsubmit="enviarFormulario(this, event);">
            <div class="anim-in anim-d1">
                <div class="campo-container">
                    <span class="material-symbols-outlined icone-campo">encrypted</span>
                    <input type="tel" name="codigo" id="codigo" class="campo" placeholder="Digite o codigo enviado pelo e-mail" maxlength="6" required>
                </div>

                <p id="erro-codigo" class="mensagem-erro"></p>
            </div>

            <div class="anim-in anim-d2 botoes">
                <button type="submit" class="botao1" texto-carregando="Validando o código...">
                    <span class="material-symbols-outlined">check</span>
                    <span class="botao-texto">Validar o código</span>
                </button>
            </div>
        </form>
        <form id="reenviar-codigo-form" method="POST" action="{{ route('reenviar-codigo') }}" onsubmit="enviarFormulario(this, event);">
            <div class="anim-in anim-d3 botoes">
                <button type="submit" id="reenviar" class="botao2" texto-carregando="Reenviando o código..." data-tempo-espera="{{ (int) session('tempo_espera', 0) }}">
                    <span class="material-symbols-outlined">sync</span>
                    <span class="botao-texto">Reenviar código</span>
                </button>
            </div>
        </form>
        <dialog id="popup" class="popup">
            <div class="popup-sucesso">
                <span class="material-symbols-outlined popup-icone">check_circle</span>
                <p id="popup-texto"></p> 
            </div>
        </dialog>
    </main>
@endsection