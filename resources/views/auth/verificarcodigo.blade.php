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
        <form method="POST" action="{{ route('validar-codigo') }}">
            @csrf

            <div class="anim-in anim-d1">
                <div class="campo-container">
                    <span class="material-symbols-outlined icone-campo">encrypted</span>
                    <input type="number" name="codigo" id="codigo" class="campo" placeholder="Digite o codigo enviado pelo e-mail" required>
                </div>

                @error('codigo')
                    <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
                @enderror

                @if(session('sucesso'))
                    <p id="mensagem" class="mensagem-sucesso">{{ session('sucesso') }}</p>
                @endif
            </div>

            <div class="anim-in anim-d2 botoes">
                <button type="submit" class="botao1" texto-carregando="Validando o código..."><span class="material-symbols-outlined">check</span>Validar o código</button>
            </div>
        </form>
        <form id="reenviar-codigo-form" method="POST" action="{{ route('reenviar-codigo') }}">
            @csrf

            <div class="anim-in anim-d3 botoes">
                <button type="submit" id="reenviar" class="botao2" texto-carregando="Reenviando o código..." data-tempo-espera="{{ (int) session('tempo_espera', 0) }}"><span class="material-symbols-outlined">sync</span>Reenviar código</button>
            </div>
        </form>
    </main>
@endsection