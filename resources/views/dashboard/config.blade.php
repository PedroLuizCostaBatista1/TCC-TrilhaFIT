<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <script src="/assets/js/app.js" defer></script>
    <link rel="stylesheet" href="/assets/css/dashboard/navbar.css">
    @stack('css')
    <title>TrilhaFIT</title>
</head>
<body>
@yield("conteudo")
<nav>
    <a href="{{ route('perfil') }}" class="nav-botao @if(Route::is('perfil')) nav-botao-ativo @else nav-botao-inativo @endif;">
        <span class="material-symbols-outlined">person</span>
        <p class="nav-texto">Perfil</p>
    </a> 
    <a href="{{ route('turma') }}" class="nav-botao @if(Route::is('turma')) nav-botao-ativo @else nav-botao-inativo @endif;">
        <span class="material-symbols-outlined">group</span>
        <p class="nav-texto">Turma</p> 
    </a>
    <a href="{{ route('relatorio') }}" class="nav-botao @if(Route::is('relatorio')) nav-botao-ativo @else nav-botao-inativo @endif;">
        <span class="material-symbols-outlined">bar_chart</span>
        <p class="nav-texto">Relatório</p>
    </a>
    <a href="{{ route('desafios') }}" class="nav-botao @if(Route::is('desafios')) nav-botao-ativo @else nav-botao-inativo @endif;">
        <span class="material-symbols-outlined">exercise</span>
        <p class="nav-texto">Desafios</p>
    </a>
    <a href="{{ route('placar') }}" class="nav-botao @if(Route::is('placar')) nav-botao-ativo @else nav-botao-inativo @endif;">
        <span class="material-symbols-outlined">social_leaderboard</span>
        <p class="nav-texto">Placar</p>
    </a>
</nav>
</body>
</html>