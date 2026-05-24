@extends("config")
@section("conteudo")
<main class="tela">
    <header class="anim-in anim-d1">
        <figure id="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#FF6517" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18.5" cy="17.5" r="3.5"></circle><circle cx="5.5" cy="17.5" r="3.5"></circle><circle cx="15" cy="5" r="1"></circle><path d="M12 17.5V14l-3-3 4-3 2 3h2"></path></svg>
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
@endsection