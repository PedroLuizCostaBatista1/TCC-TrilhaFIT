@extends("config")
@section("conteudo")
<main class="tela">
    <header class="anim-in">
        <a href="/">
            <span class="material-symbols-outlined icone-voltar">chevron_left</span>
        </a>
        <h1 class="titulo">Cadastro</h1>
    </header>
    <form method="POST" action="{{ route('cadastro') }}" onsubmit="enviarFormulario(this, event);">
        <div class="anim-in anim-d1">
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">person</span>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" required></input>
            </div>
        </div>

        <div class="anim-in anim-d2">
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">mail</span>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
            </div>

            <p id="erro-email" class="mensagem-erro"></p>
        </div>

        <div class="anim-in anim-d3">
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">password_2</span>
                <input type="password" name="senha" id="senha" class="campo" placeholder="Digite sua senha (minimo 8 caracteres)" required>
            </div>

            <p id="erro-senha" class="mensagem-erro"></p>
        </div>

        <div class="anim-in anim-d4">
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">id_card</span>
                <input type="number" name="cpf" id="cpf" class="campo" placeholder="Digite seu CPF" required>
            </div>

            <p id="erro-cpf" class="mensagem-erro"></p>
        </div>

        <div class="anim-in anim-d5">
            <div class="campo-container">
                <span class="material-symbols-outlined icone-campo">location_on</span>
                <input type="text" name="academia" id="academia" class="campo" placeholder="Digite o nome da sua academia (opcional)">
            </div>
        </div>

        <button type="submit" class="anim-in anim-d6 botao1" texto-carregando="Cadastrando...">
            <span class="material-symbols-outlined">person_add</span>
            <span class="botao-texto">Cadastrar-se</span>
        </button>

        <p class="anim-in anim-d7" id="termos">
            Ao se cadastrar, você concorda com os <br> <a href="#" class="termos-cor">Termos de Uso</a> e <a href="#" class="termos-cor">Política de Privacidade</a>
        </p>
    </form>
</main>
@endsection