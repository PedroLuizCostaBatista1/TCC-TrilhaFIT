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
        <h1 class="titulo">Editar o aviso</h1>
    </header>
    <form method="POST" action="{{ route('aviso.atualizar', $aviso->id) }}">
        @csrf
        @method('PUT')

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">label</span>
                <select name="tipo" id="tipo">
                    <option value="informacao" {{ $aviso->tipo == 'informacao' ? 'selected' : '' }}>Informação</option>
                    <option value="desafio" {{ $aviso->tipo == 'desafio' ? 'selected' : '' }}>Desafio</option>
                    <option value="anuncio" {{ $aviso->tipo == 'anuncio' ? 'selected' : '' }}>Anuncio</option>
                    <option value="lembrete" {{ $aviso->tipo == 'lembrete' ? 'selected' : '' }}>Lembrete</option>
                </select>
            </div>
        </div>

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">titlecase</span>
                <input type="text" name="titulo" id="titulo" value="{{ $aviso->titulo }}" placeholder="Digite o titulo do aviso" required></input>
            </div>
        </div>

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">description</span>
                <input type="text" name="conteudo" id="conteudo" value="{{ $aviso->conteudo }}" placeholder="Digite o conteudo do aviso" required></input>
            </div>
        </div>

        <button type="submit" class="botao1" texto-carregando="Salvando as alterações..."><span class="material-symbols-outlined">save</span>Salvar as alterações</button>
    </form>
</main>
@endsection