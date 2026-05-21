<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
    <link rel="stylesheet" href="/assets/css/auth.css">
    <title>TrilhaFIT - Trocar senha</title>
</head>
<body>
    <main class="tela">
        <header class="anim-in">
            <a href="{{ route('login') }}">
                <i data-lucide="chevron-left" class="icone"></i>
            </a>
            <h1 class="titulo">Redefinir sua senha</h1>
        </header>
        <form method="POST" action="{{ route('atualizar-senha') }}">
            @csrf

            <div class="anim-in anim-d1">
                <div class="campo-container">
                    <label for="senha" class="label-wrap">
                        <i data-lucide="key-round"></i>
                    </label>
                    <input type="password" name="senha" id="senha" class="campo" placeholder="Digite sua nova senha (minimo 8 caracteres)" required>
                </div>
            </div>

            <div class="anim-in anim-d2">
                <div class="campo-container">
                    <label for="senha" class="label-wrap">
                        <i data-lucide="key-round"></i>
                    </label>
                    <input type="password" name="senha_confirmation" id="senha_confirmation" class="campo" placeholder="Digite novamente sua nova senha" required>
                </div>

                @error('senha')
                    <p class="mensagem-erro">As senhas não coincidem. Tente novamente</p>
                @enderror
            </div>

            <div class="anim-in anim-d3 botoes">
                <button type="submit" class="botao1">Redefinir Senha</button>
            </div>
        </form>
    </main>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>