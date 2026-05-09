<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
    <link rel="stylesheet" href="/assets/css/navbar.css">
    <link rel="stylesheet" href="/assets/css/perfil.css">
    <title>TrilhaFIT</title>
</head>
<body>

@yield("conteudo")

<nav id="navbar">
    <a href="perfil" class="botao @if(Route::is('perfil')) botao-ativo @else botao-inativo @endif;">
        <i data-lucide="user" class="icone"></i>
        <span class="texto">Perfil</span>
    </a> 
    <a href="turma" class="botao @if(Route::is('turma')) botao-ativo @else botao-inativo @endif;">
        <i data-lucide="users" class="icone"></i>
        <span class="texto">Turma</span> 
    </a>
    <a href="relatorio" class="botao @if(Route::is('relatorio')) botao-ativo @else botao-inativo @endif;">
        <i data-lucide="bar-chart-2" class="icone"></i>
        <span class="texto">Relatório</span>
    </a>
    <a href="desafios" class="botao @if(Route::is('desafios')) botao-ativo @else botao-inativo @endif;">
        <i data-lucide="zap" class="icone"></i>
        <span class="texto">Desafios</span>
    </a>
    <a href="placar" class="botao @if(Route::is('placar')) botao-ativo @else botao-inativo @endif;">
        <i data-lucide="award" class="icone"></i>
        <span class="texto">Placar</span>
    </a>
</nav>
<script>
    lucide.createIcons();
</script>
</body>
</html>