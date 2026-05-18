<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
    <link rel="stylesheet" href="/assets/css/auth.css">
    <title>TrilhaFIT</title>
</head>
<body>
    <main class="tela">
        <header id="header-tela-inicial" class="anim-in anim-d1">
            <figure id="logo">
                <i data-lucide="bike" id="icone-bike"></i>
            </figure>
            <h1 class="titulo">Bem-vindo ao TrilhaFIT!</h1>
            <p class="subtitulo">Pedale, evolua e vença!</p>
        </header>
        <section class="anim-in anim-d2 botoes">
            @auth
                <a href="{{ route('cadastro') }}" class="botao1">Criar Conta</a>
                <a href="{{ route('perfil') }}" class="botao2">Entrar</a>
            @endauth
            @guest
                <a href="{{ route('cadastro') }}" class="botao1">Criar Conta</a>
                <a href="{{ route('login') }}" class="botao2">Entrar</a>
            @endguest
        </section>
    </main>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>