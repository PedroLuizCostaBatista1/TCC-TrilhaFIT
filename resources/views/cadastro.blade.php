<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
    <link rel="stylesheet" href="/assets/css/cadastro.css">
    <title>TrilhaFIT - Cadastro</title>
</head>
<body>
    <main class="tela">
        <header class="anim-in">
            <a href="/">
                <i data-lucide="chevron-left" id="icone"></i>
            </a>
            <h1 id="titulo">Cadastro</h1>
        </header>
        <form method="post">
            <div class="anim-in anim-d1">
                <label for="nome" class="label-wrap">
                    <i data-lucide="user" style="label-icon"></i>
                </label>
                <input type="text" id="nome" class="campo" placeholder="Seu nome completo" required>
            </div>

            <div class="anim-in anim-d2">
                <label for="email" class="label-wrap">
                    <i data-lucide="mail" style="label-icon"></i>
                </label>
                <input type="email" id="email" class="campo" placeholder="Seu e-mail" required>
            </div>

            <div class="anim-in anim-d3">
                <label for="senha" class="label-wrap">
                    <i data-lucide="key-round" style="label-icon"></i>
                </label>
                <input type="password" id="senha" class="campo" placeholder="Sua senha" required>
            </div>

            <div class="anim-in anim-d4">
                <label for="cpf" class="label-wrap">
                    <i data-lucide="lock" style="label-icon"></i>
                </label>
                <input type="text" id="cpf" class="campo" placeholder="Seu CPF" required>
            </div>

            <div class="anim-in anim-d5">
                <label for="academia" class="label-wrap">
                    <i data-lucide="map-pin" style="labal-icon"></i>
                </label>
                <input type="text" id="academia" class="campo" placeholder="Nome da sua academia (Opcional)">
            </div>

            <div class="anim-in anim-d6">
                <button type="submit" id="submit">Criar conta</button>
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