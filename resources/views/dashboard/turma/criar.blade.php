@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/turma/criar.css">
@endpush
<main>
    <header>
        <a href="{{ route('turma') }}">
            <span class="material-symbols-outlined icone-voltar">chevron_left</span>
        </a>
        <h1 class="titulo">Criar turma</h1>
    </header>
    <form method="POST" action="{{ route('turma.salvar') }}">
        @csrf

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">person</span>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome da turma" required></input>
            </div>

            @error('nome')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">description</span>
                <input type="text" name="descricao" id="descricao" placeholder="Descrição da turma (opcional)">
            </div>

            @error('descricao')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="botao1" texto-carregando="Criando turma..."><span class="material-symbols-outlined">group_add</span>Criar turma</button>
    </form>
</main>
@endsection