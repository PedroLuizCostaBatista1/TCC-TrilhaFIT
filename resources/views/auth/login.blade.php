@extends("config")
@section("conteudo")
@push("scripts")
    <script src="/assets/js/auth/login.js" defer></script>
@endpush
<main class="tela">
    <header class="anim-in">
        <a href="/">
            <span class="material-symbols-outlined icone-voltar">chevron_left</span>
        </a>
        <h1 class="titulo">Login</h1>
    </header>
    <form method="POST" action="{{ route('login') }}" onsubmit="enviarFormulario(this, event);">
        <div class="anim-in anim-d1">
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">mail</span>
                <input type="email" name="email" id="email" class="campo" placeholder="Digite seu e-mail" required>
            </div>
        </div>

        <div class="anim-in anim-d2">
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">password_2</span>
                <input type="password" name="senha" id="senha-campo" placeholder="Digite sua senha" required>
                <button type="button" id="botao-mostrar-senha" onclick="mostrarSenha();">
                    <span class="material-symbols-outlined" id="icone-mostrar-senha">visibility_off</span>
                </button>
            </div>

            <p id="erro-geral" class="mensagem-erro"></p>
        </div>

        <div class="anim-in anim-d3 botoes">
            <button type="submit" class="botao1" texto-carregando="Entrando...">
                <span class="material-symbols-outlined">login</span>
                <span class="botao-texto">Entrar</span>
            </button>
            <a href="{{ route('trocar-senha') }}" class="botao2">Esqueceu a senha?</a>
        </div>
    </form>
    @if(session('sucesso'))
        <dialog open id="popup" class="popup">
            <div class="popup-sucesso">
                <span class="material-symbols-outlined popup-icone">check_circle</span>
                <p id="popup-texto"></p>
            </div>
        </dialog>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                mostrarPopup("{{ session('sucesso') }}");
            });
        </script>
    @endif
</main>
@endsection