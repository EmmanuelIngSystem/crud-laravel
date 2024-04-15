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
        <link rel="stylesheet" href="{{ asset('css/show.css') }}" type="text/css">
    </head>

<body>
    <!-- Project detail with title, description and author -->
    <h2 class="title_show">
        {{ __('Detalle del proyecto') }}
    </h2>

    <div class="container_main">
        <h1 class="title_project margin_between_columns">{{ $project->name }}</h1>
        <p class="margin_between_columns size_paragraph">{{ $project->description }}</p>
        <p class="margin_between_columns size_paragraph">{{ $project->created_at->diffForHumans() }}</p>
        <div class="container_buttons margin_between_columns">
            <a class="btn_link butto_return" href="{{ route('projects.index') }}">{{ __('Volver') }}</a>
            <a class="btn_link butto_update_project" href="{{ route('projects.edit', $project) }}">{{ __('Editar') }}</a>
            <form class="" action="{{ route('projects.destroy', $project) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn_link button_delete" type="submit">{{ __('Eliminar') }}</button>
            </form>
        </div>
    </div>
</body>

</html>
