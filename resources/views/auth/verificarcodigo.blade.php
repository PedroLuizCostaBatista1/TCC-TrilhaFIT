<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
    <link rel="stylesheet" href="/assets/css/auth.css">
    <title>TrilhaFIT</title>
</head>
<body>
    <main class="tela">
        <header class="anim-in">
            <h1 class="titulo">Código de Verificação</h1>
        </header>
        <form method="POST" action="{{ route('validar-codigo') }}">
            @csrf

            <div class="anim-in anim-d1">
                <div class="campo-container">
                    <label for="codigo" class="label-wrap">
                        <i data-lucide="lock"></i>
                    </label>
                    <input type="number" name="codigo" id="codigo" class="campo" placeholder="Digite o codigo enviado pelo e-mail" required>
                </div>

                @error('codigo')
                    <p class="mensagem-erro">{{ $message }}</p>
                @enderror
            </div>

            <div class="anim-in anim-d2 botoes">
                <button type="submit" class="botao1">Redefinir senha</button>
            </div>
        </form>
    </main>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>