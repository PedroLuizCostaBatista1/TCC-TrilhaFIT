<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>TrilhaFIT - Cadastro</title>
</head>
<body>
    <div class="app-wrapper bg-dots" style="background-color: #FFFFFF;">
        <div style="max-width: 390px; width: 100%; margin: 0 auto; padding: 40px 20px; min-height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <div class="anim-in" style="text-align: center; margin-bottom: 28px;">
                <a href="/" style="border: none; color: #1A1A1A; font-size: 24px; padding: 0; margin-bottom: 16px;">
                    <i data-lucide="chevron-left" style="width:24px;height:24px; margin: auto;"></i>
                </a>
                <h1 style="font-size: 26px; font-weight: 800; color: #1A1A1A; margin-bottom: 4px;">Crie sua conta</h1>
                <p style="font-size: 14px; color: rgba(0,0,0,0.5); font-weight: 500;">Pedale, evolua e vença! 🚴‍♂️</p>
            </div>
            <form style="display: flex; flex-direction: column; gap: 14px; width: 100%;">
                <div class="anim-in anim-d1" style="position: relative;">
                    <div class="icon-wrap">
                        <i data-lucide="user" style="width:20px;height:20px;"></i>
                    </div>
                    <input type="text" id="name" class="input-field" placeholder="Seu nome completo" required>
                </div>
                <div class="anim-in anim-d2" style="position: relative;">
                    <div class="icon-wrap">
                        <i data-lucide="mail" style="width:20px;height:20px;"></i>
                    </div>
                    <input type="email" id="email" class="input-field" placeholder="Seu e-mail" required>
                </div>
                <div class="anim-in anim-d3" style="position: relative;">
                    <div class="icon-wrap">
                        <i data-lucide="key-round" style="width:20px;height:20px;"></i>
                    </div>
                    <input type="password" id="password" class="input-field" placeholder="Sua senha" required>
                </div>
                <div class="anim-in anim-d4" style="position: relative;">
                    <div class="icon-wrap">
                        <i data-lucide="lock" style="width:20px;height:20px;"></i>
                    </div>
                    <input type="text" id="cpf" class="input-field" placeholder="Seu CPF" required>
                </div>
                <div class="anim-in anim-d5" style="position: relative;">
                    <div class="icon-wrap">
                        <i data-lucide="map-pin" style="width:20px;height:20px;"></i>
                    </div>
                    <input type="text" id="map" class="input-field" placeholder="Nome da sua academia (Opcional)">
                </div>
                <div class="anim-in anim-d6" style="margin-top: 6px;">
                    <button type="submit" class="submit-btn neon-glow" id="submit-btn">
                        <span id="btn-text">Criar conta</span>
                    </button>
                </div>
                <p class="anim-in anim-d7" style="text-align: center; font-size: 11px; color: rgba(0,0,0,0.45); margin-top: 12px;">
                    Ao se cadastrar, você concorda com os <br><span id="terms-color" style="color: #FF5C00; cursor: pointer;">Termos de Uso</span> e <span style="color: #FF5C00; cursor: pointer;">Política de Privacidade</span>
                </p>
            </form>
        </div>
    </div>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>