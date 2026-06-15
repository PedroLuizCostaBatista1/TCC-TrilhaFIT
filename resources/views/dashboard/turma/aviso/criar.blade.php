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
        <h1 class="titulo">Criar aviso</h1>
    </header>
    <form method="POST" action="{{ route('turma.publicar', $turma->id) }}">
        @csrf

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">label</span>
                <select name="tipo" id="tipo">
                    <option value="informacao">Informação</option>
                    <option value="desafio">Desafio</option>
                    <option value="anuncio">Anuncio</option>
                    <option value="lembrete">Lembrete</option>
                </select>
            </div>
        </div>

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">titlecase</span>
                <input type="text" name="titulo" id="titulo" placeholder="Digite o titulo do mural" required></input>
            </div>
        </div>

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">description</span>
                <input type="text" name="conteudo" id="conteudo" placeholder="Digite o conteudo do aviso" required></input>
            </div>
        </div>

        <button type="submit" class="botao1" texto-carregando="Criando aviso..."><span class="material-symbols-outlined">add_alert</span>Criar aviso</button>
    </form>
</main>
@endsection