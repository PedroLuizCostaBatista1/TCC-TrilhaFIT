@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/auth/editarperfil.css">
@endpush
<main>
    <header>
        <a href="{{ route('turma.exibir', $turma->id) }}">
            <span class="material-symbols-outlined icone-voltar">chevron_left</span>
        </a>
        <h1>Editar turma</h1>
    </header>
    <form method="POST" action="{{ route('turma.atualizar', $turma->id) }}" onsubmit="return confirm('Tem certeza? Esta ação substituirá as informações anteriores.');">
        @csrf
        @method('PUT')

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">person</span>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $turma->nome) }}" placeholder="Nome da turma" required></input>
            </div>

            @error('nome')
                <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">description</span>
                <input type="text" name="descricao" id="descricao" value="{{ old('descricao', $turma->descricao) }}" placeholder="Descrição da turma" required>
            </div>

            @error('email')
                <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="botao1" texto-carregando="Salvando as alterações..."><span class="material-symbols-outlined">save</span>Salvar alterações</button>
    </form>
    <form id="form-deletar" method="POST" action="{{ route('turma.deletar', $turma->id) }}" onsubmit="return confirm('Tem certeza? Esta ação não pode ser desfeita.');">
        @csrf
        @method('DELETE')

        <button type="submit" id="botao-deletar" class="botao2" texto-carregando="Apagando a turma..."><span class="material-symbols-outlined">delete</span>Apagar a turma</button>
    </form>
</main>
@endsection