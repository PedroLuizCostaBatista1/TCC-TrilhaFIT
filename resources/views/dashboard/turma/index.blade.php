@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/turma/index.css">
@endpush
@if(Auth::user()->tipo === 'instrutor')
    <main>
        <section class="nao-presente">
            <figure class="logo">
                <span class="material-symbols-outlined">assignment</span>
            </figure>
            <h1>Criar seu mural</h1>
            <p>Como instrutor, você pode criar o seu mural exclusivo para postar avisos e desafiar com seus alunos, ou entrar em um mural existente.</p>
            <div class="botoes">
                <a href="{{ route('turma.criar') }}" class="botao1"><span class="material-symbols-outlined">group_add</span>Criar novo mural</a>
                <a href="{{ route('turma.entrar') }}" class="botao2"><span class="material-symbols-outlined">login</span>Entrar em um mural</a>
            </div>
        </section>
    </main>
@else
    <main>
        <section class="nao-presente">
            <figure class="logo">
                <span class="material-symbols-outlined">pedal_bike</span>
            </figure>
            <h1>Nenhum mural vinculado</h1>
            <p>Para acessar os desafios e o mural do seu instrutor, você precisa se conectar a um mural ativo utilizando o código de acesso.</p>
            <div class="botoes">
                <a href="{{ route('turma.entrar') }}" class="botao1"><span class="material-symbols-outlined">login</span>Entrar em um mural</a>
            </div>
        </section>
    </main>
@endif
@endsection