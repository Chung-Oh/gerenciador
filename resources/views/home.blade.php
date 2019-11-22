<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Daniel Chung">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Gerenciador</title>
        <!-- Style -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Icon -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body class="text-center">

        <main>
            <div class="bg-dark p-4 line-top">
                <h1 class="text-white">Gerenciador de Notas</h1>
            </div>

            <!-- Precisa Criar Modal Remove -->
            @PrimaryForm
                @slot('categories', $categories)
            @endPrimaryForm
            @Loading @endLoading
            @Table @endTable
            @ButtonGoTop @endButtonGoTop
        </main>

        <footer class="bg-dark p-2 fixed-bottom">
            <p class="text-white mb-0 pb-0">&copy 2019 <span class="text-success font-weight-bold">Gerenciador Notas</span> - {{ __('Developing by Daniel Chung') }}</p>
        </footer>

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
