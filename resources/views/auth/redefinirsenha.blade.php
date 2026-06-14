@extends("config")
@section("conteudo")
    <main class="tela">
        <header class="anim-in">
            <h1 class="titulo">Redefinir sua senha</h1>
        </header>
        <form method="POST" action="{{ route('atualizar-senha') }}">
            @csrf

            <div class="anim-in anim-d1">
                <div class="campo-container">
                    <span class="material-symbols-outlined icone-campo">password_2</span>
                    <input type="password" name="senha" id="senha" class="campo" placeholder="Digite sua nova senha (minimo 8 caracteres)" required>
                </div>
            </div>

            <div class="anim-in anim-d2">
                <div class="campo-container">
                    <span class="material-symbols-outlined icone-campo">check_circle</span>
                    <input type="password" name="senha_confirmation" id="senha_confirmation" class="campo" placeholder="Digite novamente sua nova senha" required>
                </div>

                @error('senha')
                    <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
                @enderror
            </div>

            <div class="anim-in anim-d3 botoes">
                <button type="submit" class="botao1" texto-carregando="Redefinindo a senha..."><span class="material-symbols-outlined">lock_reset</span>Redefinir Senha</button>
            </div>
        </form>
    </main>
@endsection