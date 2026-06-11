@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/turma/index.css">
@endpush
@if($turmas->isNotEmpty())
    <main>
        <header>
            <h1>Minhas turmas</h1>
            @if(Auth::user()->tipo === 'instrutor')
                <a href="{{ route('turma.criar') }}" id="botao-criar-turma"><span class="material-symbols-outlined">group_add</span>Criar novo mural</a>
            @endif
        </header>
        <section>
            @foreach($turmas as $turma)
                <div class="turma-card">
                    <h2>{{ $turma->nome }}</h2>
                    <p class="descricao">Instrutor: {{ $turma->instrutor->nome }}</p>
                    <a class="botao-acessar" href="{{ route('turma.exibir', $turma->id) }}">Acessar mural</a>
                </div>
            @endforeach
        </section>
    </main>
@else
    @if(Auth::user()->tipo === 'instrutor')
        <main>
            <section class="nao-presente">
                <figure class="logo">
                    <span class="material-symbols-outlined">assignment</span>
                </figure>
                <h1>Gerenciamento de Murais</h1>
                <p>Como instrutor, você pode criar uma nova comunidade de ciclistas ou vincular-se a um mural de parceiros já existente.</p>
                <div class="botoes">
                    <a href="{{ route('turma.criar') }}" class="botao1"><span class="material-symbols-outlined">add</span>Criar novo mural</a>
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
                <h1>Nenhuma turma vinculada</h1>
                <p>Para acessar os treinos, desafios e o mural do seu professor, você precisa se conectar a uma turma ativa.</p>
                <a href="{{ route('turma.entrar') }}" class="botao1"><span class="material-symbols-outlined">login</span>Entrar em uma turma?</a>
            </section>
        </main>
    @endif
@endif
@endsection