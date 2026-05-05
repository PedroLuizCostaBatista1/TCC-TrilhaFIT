<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
    <link rel="stylesheet" href="/assets/css/login.css">
    <title>TrilhaFIT</title>
</head>
<body>
    <div class="app-wrapper">
        <div class="tela">
            <div id="logo" class="anim-in anim-d1">
                <div id="borda">
                    <i data-lucide="bike" id="icone"></i>
                </div>
                <h1 class="titulo">Bem-vindo ao TrilhaFIT!</h1>
                <p class="subtitulo">Pedale, evolua e vença! 🚴‍♂️</p>
            </div>
            <div class="anim-in anim-d2 botoes">
                <a href="cadastro" class="botao1">
                    <span>Criar Conta</span>
                </a>
                <a href="login" class="botao2">
                    <span>Entrar</span>
                </a>
            </div>
        </div>
    </div>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>