<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/assets/css/dashboard/navbar.css">
    <script src="/assets/js/auth.js" defer></script>
    @stack('css')
    @stack('scripts')
    <title>TrilhaFIT</title>
</head>
<body>
@yield("conteudo")
<nav>
    <a href="{{ route('perfil') }}" class="nav-botao {{ request()->is('perfil*') ? 'nav-botao-ativo' : 'nav-botao-inativo' }}">
        <span class="material-symbols-outlined">person</span>
        <p class="nav-texto">Perfil</p>
    </a>
    @if(Auth::user()->ambiente_treino === 'academia')
        <a href="{{ route('turma') }}" class="nav-botao {{ request()->is('turma*') ? 'nav-botao-ativo' : 'nav-botao-inativo' }}">
            <span class="material-symbols-outlined">group</span>
            <p class="nav-texto">Mural</p> 
        </a>
    @endif
    <a href="{{ route('relatorio') }}" class="nav-botao {{ request()->is('relatorio*') ? 'nav-botao-ativo' : 'nav-botao-inativo' }}">
        <span class="material-symbols-outlined">bar_chart</span>
        <p class="nav-texto">Relatório</p>
    </a>
    <a href="{{ route('desafios') }}" class="nav-botao {{ request()->is('desafios*') ? 'nav-botao-ativo' : 'nav-botao-inativo' }}">
        <span class="material-symbols-outlined">exercise</span>
        <p class="nav-texto">Desafios</p>
    </a>
</nav>
@if(session('perfil-editado'))
    <dialog open id="popup" class="popup">
        <div class="popup-sucesso">
            <span class="material-symbols-outlined popup-icone">check_circle</span>
            <p id="popup-texto"></p>
        </div>
    </dialog>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            mostrarPopup("{{ session('perfil-editado') }}");
        });
    </script>
@endif
</body>
</html>