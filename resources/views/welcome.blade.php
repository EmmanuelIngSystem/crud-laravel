<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/format.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    </head>
    <body>
        <h1 class="title_welcome">Pagina de inicio</h1>
        <nav>
            <ul>
                <li>
                    <a href="{{route('projects.index')}}" :active="request()->routeIs('projects.index')">
                        {{ __('Proyectos') }}
                    </a>
                </li>
            </ul>
        </nav>
    </body>
</html>