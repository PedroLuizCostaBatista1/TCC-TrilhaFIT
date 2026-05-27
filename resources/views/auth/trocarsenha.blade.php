@extends("config")
@section("conteudo")
<main class="tela">
    <header class="anim-in">
        <a href="{{ route('login') }}">
            <span class="material-symbols-outlined icone-voltar">chevron_left</span>
        </a>
        <h1 class="titulo">Recuperar senha</h1>
    </header>
    <form method="POST" action="{{ route('verificar-email') }}">
        @csrf

        <div class="anim-in anim-d1">
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">mail</span>
                <input type="email" name="email" id="email" class="campo" placeholder="Digite seu e-mail" required>
            </div>

            @error('email')
                <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="anim-in anim-d2 botao1">Enviar codigo de recuperação</button>
    </form>
</main>
@endsection