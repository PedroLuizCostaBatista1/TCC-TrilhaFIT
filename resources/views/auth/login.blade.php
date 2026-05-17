<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
    <link rel="stylesheet" href="/assets/css/auth.css">
    <title>TrilhaFIT - Login</title>
</head>
<body>
    <main class="tela">
        <header class="anim-in">
            <a href="/">
                <i data-lucide="chevron-left" class="icone"></i>
            </a>
            <h1 class="titulo">Bem-vindo de volta!</h1>
        </header>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="anim-in anim-d1">
                <div class="campo-container">
                    <label for="email" class="label-wrap">
                        <i data-lucide="mail"></i>
                    </label>
                    <input type="email" name="email" id="email" class="campo" placeholder="Digite seu e-mail" required>
                </div>

                @error('email')
                    <p class="mensagem-erro">Erro</p>
                @enderror
            </div>

            <div class="anim-in anim-d2">
                <div class="campo-container">
                    <label for="senha" class="label-wrap">
                        <i data-lucide="key-round"></i>
                    </label>
                    <input type="password" name="senha" id="senha" class="campo" placeholder="Digite sua senha" required>
                </div>

                @error('senha')
                    <p class="mensagem-erro">Erro</p>
                @enderror
            </div>

            <div class="anim-in anim-d3 botoes">
                <a href="perfil" class="botao1">Entrar</a>
                <a href="trocar-senha" class="botao2">Esqueceu a senha?</a>
            </div>
        </form>
    </main>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>