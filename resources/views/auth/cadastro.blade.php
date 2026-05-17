<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
    <link rel="stylesheet" href="/assets/css/auth.css">
    <title>TrilhaFIT - Cadastro</title>
</head>
<body>
    <main class="tela">
        <header class="anim-in">
            <a href="/">
                <i data-lucide="chevron-left" class="icone"></i>
            </a>
            <h1 class="titulo">Cadastro</h1>
        </header>
        <form method="POST" action="{{ route('cadastro') }}">
            @csrf

            <div class="anim-in anim-d1">
                <div class="campo-container">
                    <label for="nome" class="label-wrap">
                        <i data-lucide="user"></i>
                    </label>
                    <input type="text" name="nome" id="nome" class="campo" placeholder="Digite seu nome completo" required>
                </div>

                @error('nome')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="anim-in anim-d2">
                <div class="campo-container">
                    <label for="email" class="label-wrap">
                        <i data-lucide="mail"></i>
                    </label>
                    <input type="email" name="email" id="email" class="campo" placeholder=" Digite seu e-mail" required>
                </div>

                @error('email')
                    <p class="mensagem-erro">Este E-mail ja existe</p>
                @enderror
            </div>

            <div class="anim-in anim-d3">
                <div class="campo-container">
                    <label for="senha" class="label-wrap">
                        <i data-lucide="key-round"></i>
                    </label>
                    <input type="password" name="senha" id="senha" class="campo" placeholder="Digite sua senha (minimo 6 caracteres)" required>
                </div>

                @error('senha')
                    <p class="mensagem-erro">Senha abaixo de 6 caracteres</p>
                @enderror
            </div>

            <div class="anim-in anim-d4">
                <div class="campo-container">
                    <label for="cpf" class="label-wrap">
                        <i data-lucide="lock"></i>
                    </label>
                    <input type="text" name="cpf" id="cpf" class="campo" placeholder="Digite seu CPF" required>
                </div>

                @error('cpf')
                    <p class="mensagem-erro">CPF invalido</p>
                @enderror
            </div>

            <div class="anim-in anim-d5">
                <div class="campo-container">
                    <label for="academia" class="label-wrap">
                        <i data-lucide="map-pin"></i>
                    </label>
                    <input type="text" name="academia" id="academia" class="campo" placeholder="Digite o nome da sua academia (opcional)">
                </div>
            </div>

            <div class="anim-in anim-d6">
                <button type="submit" class="botoes botao1">Criar conta</button>
            </div>

            <p class="anim-in anim-d7" id="termos">
                Ao se cadastrar, você concorda com os <br> <a href="#" class="termos-cor">Termos de Uso</a> e <a href="#" class="termos-cor">Política de Privacidade</a>
            </p>
        </form>
    </main>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>