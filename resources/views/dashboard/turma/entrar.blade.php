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
        <h1 class="titulo">Entrar em uma turma</h1>
    </header>
    <form method="POST" action="{{ route('turma.entrarComCodigo') }}">
        @csrf

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">person</span>
                <input type="text" name="codigo" id="codigo" placeholder="Digite o codigo da turma" required></input>
            </div>

            @error('codigo')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="botao1"><span class="material-symbols-outlined">login</span>Entrar</button>
    </form>
</main>
@endsection