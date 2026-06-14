@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/dashboard/turma/criar.css">
@endpush
@push("scripts")
    <script src="/assets/js/auth.js" defer></script>
@endpush
<main>
    <header>
        <a href="{{ route('turma') }}">
            <span class="material-symbols-outlined icone-voltar">chevron_left</span>
        </a>
        <h1 class="titulo">Entrar em um mural</h1>
    </header>
    <form method="POST" action="{{ route('turma.entrarComCodigo') }}">
        @csrf

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">encrypted</span>
                <input type="text" name="codigo" id="codigo" placeholder="Digite o codigo do mural" required></input>
            </div>

            @error('codigo')
                <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="botao1" texto-carregando="Entrando..."><span class="material-symbols-outlined">login</span>Entrar</button>
    </form>
</main>
@endsection