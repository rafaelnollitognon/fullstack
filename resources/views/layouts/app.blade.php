<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Sistema - @yield('titulo')</title>

    {{-- Essa linha carrega o Tailwind na tela --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{-- bg-gray-100 deixa o fundo cinza claro --}}
<body class="bg-gray-100 font-sans antialiased">

    {{-- O @yield é o buraco onde as outras páginas vão se encaixar --}}
    @yield('conteudo')

</body>
</html>
