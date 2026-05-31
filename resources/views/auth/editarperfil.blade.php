@extends("dashboard/config")
@section("conteudo")
@push("css")
    <link rel="stylesheet" href="/assets/css/auth/editarperfil.css">
@endpush
<main>
    <header>
        <a href="{{ route('perfil') }}">
            <span class="material-symbols-outlined icone-voltar">chevron_left</span>
        </a>
        <h1>Editar Conta</h1>
        <p>Deixe o campo de senha em branco caso não queira alterar sua senha</p>
    </header>
    <form method="POST" action="{{ route('perfil-atualizar') }}">
        @csrf
        @method('PUT')

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">person</span>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $usuario->nome) }}" placeholder="Nome completo" required></input>
            </div>

            @error('nome')
                <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">mail</span>
                <input type="email" name="email" id="email" value="{{ old('email', $usuario->email) }}" placeholder="E-mail" required>
            </div>

            @error('email')
                <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">password_2</span>
                <input type="password" name="senha" id="senha" class="campo" placeholder="Senha">
            </div>

            @error('senha')
                <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">check_circle</span>
                <input type="password" name="senha_confirmation" id="senha_confirmation" class="campo" placeholder="Senha confirmada">
            </div>

            @error('senha')
                <p id="mensagem" class="mensagem-erro">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">location_on</span>
                <input type="text" name="academia" id="academia" value="{{ old('academia', $usuario->academia) }}" class="campo" placeholder="Nome da academia">
            </div>
        </div>

        <button type="submit" class="botao1"><span class="material-symbols-outlined">save</span>Salvar alterações</button>
    </form>
    <form id="form-deletar" method="POST" action="{{ route('perfil-deletar') }}" onsubmit="return confirm('Tem certeza? Esta ação não pode ser desfeita.');">
        @csrf
        @method('DELETE')

        <button type="submit" id="botao-deletar" class="botao2"><span class="material-symbols-outlined">delete</span>Apagar conta</button>
    </form>
</main>
@endsection