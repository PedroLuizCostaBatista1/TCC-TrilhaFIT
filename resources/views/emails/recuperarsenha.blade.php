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
        <h1 class="titulo">Olá!</h1>
        <p>Você solicitou a recuperação de senha. Seu código é</p>
        <p>{{ $codigo }}</p>
        <p>Se você não solicitou isso, ignore este e-mail.</p>
    </main>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>