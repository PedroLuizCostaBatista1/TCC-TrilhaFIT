<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/assets/js/auth.js" defer></script>
    <link rel="stylesheet" href="/assets/css/auth.css">
    @stack('css')
    @stack('scripts')
    <title>TrilhaFIT</title>
</head>
<body>
@yield("conteudo")
</body>
</html>