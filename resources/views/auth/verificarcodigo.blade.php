@extends("config")
@section("conteudo")
    <main class="tela">
        <header class="anim-in">
            <a href="{{ route('trocar-senha') }}">
                <i data-lucide="chevron-left" class="icone"></i>
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

                @error('codigoInvalido')
                    <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
                @enderror

                @error('codigo')
                    <p id="mensagem" class="mensagem-erro">Codigo teve ser exatamente 6 digitos</p>
                @enderror

                @if(session('sucesso'))
                    <p id="mensagem" class="mensagem-sucesso">{{ session('sucesso') }}</p>
                @endif
            </div>

            <div class="anim-in anim-d2 botoes">
                <button type="submit" class="botao1">Validar o código</button>
            </div>
        </form>
        <form id="reenviar-codigo-form" method="POST" action="{{ route('reenviar-codigo') }}">
            @csrf

            <div class="anim-in anim-d3 botoes">
                <button type="submit" id="reenviar" class="botao2">Reenviar código</button>
            </div>
        </form>
    </main>
    <script>
        const reenviar = document.getElementById('reenviar');
        let tempoEspera = {{ (int) session('tempo_espera', 0) }};

        function atualizarContador() {
            const tempoAgora = Math.floor(Date.now() / 1000);
            const tempoRestante = tempoEspera - tempoAgora;

            if (tempoRestante > 0) {
                reenviar.disabled = true;
                reenviar.innerText = `Aguarde ${tempoRestante}s para reenviar novamente`;
                setTimeout(atualizarContador, 1000);
            } else {
                reenviar.disabled = false;
                reenviar.innerText = "Reenviar código";
            }
        }

        if (tempoEspera > 0) {
            atualizarContador();
        }
    </script>
@endsection