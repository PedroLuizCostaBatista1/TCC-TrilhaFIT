@extends("config")
@section("conteudo")
<main class="tela">
    <header class="anim-in">
        <a href="/">
            <span class="material-symbols-outlined icone-voltar">chevron_left</span>
        </a>
        <h1 class="titulo">Bem-vindo de volta!</h1>
    </header>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="anim-in anim-d1">
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">mail</span>
                <input type="email" name="email" id="email" class="campo" placeholder="Digite seu e-mail" required>
            </div>
        </div>

        <div class="anim-in anim-d2">
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">password_2</span>
                <input type="password" name="senha" id="senha" class="campo" placeholder="Digite sua senha" required>
            </div>

            @error('credenciais')
                <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
            @enderror

            @if(session('sucesso'))
                <p id="mensagem" class="mensagem-sucesso">{{ session('sucesso') }}</p>
            @endif
        </div>

        <div class="anim-in anim-d3 botoes">
            <button type="submit" class="botao1">Entrar</button>
            <a href="{{ route('trocar-senha') }}" class="botao2">Esqueceu a senha?</a>
        </div>
    </form>
</main>
@endsection