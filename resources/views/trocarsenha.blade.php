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
            <a href="login">
                <i data-lucide="chevron-left" class="icone"></i>
            </a>
            <h1 class="titulo">Recuperar senha</h1>
        </header>
        <form method="post">
            <div class="anim-in anim-d1">
                <label for="email" class="label-wrap">
                    <i data-lucide="mail" style="label-icon"></i>
                </label>
                <input type="email" id="email" class="campo" placeholder="Digite seu e-mail" required>
            </div>

            <div class="anim-in anim-d2 botoes">
                <a href="#" class="botao1">Enviar codigo de recuperação</a>
            </div>
        </form>
    </main>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>