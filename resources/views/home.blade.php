<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Daniel Chung">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Gerenciador Notas</title>
        <!-- Style -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body class="text-center">

        <main>
            <div class="bg-dark p-4 line-top">
                <h1 class="text-white">Gerenciador Notas</h1>
            </div>

            <!-- Precisa Criar Modal Remove -->
            @PrimaryForm @endPrimaryForm
            @Table @endTable
            @ButtonGoTop @endButtonGoTop
        </main>

        <footer class="bg-dark p-2 fixed-bottom">
            <p class="text-white mb-0 pb-0">&copy 2019 <span class="text-success font-weight-bold">Gerenciador Notas</span> - {{ __('Developing by Daniel Chung') }}</p>
        </footer>

        <!-- JS -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
