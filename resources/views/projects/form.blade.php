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
        <link rel="stylesheet" href="{{ asset('css/form.css') }}" type="text/css">
    </head>
    <h2 class="title_form">
        {{ $title }}
    </h2>
    <body>
        <form class="form_register_project" action="{{ $action }}" method="POST">
            @csrf
            @isset ($method)
                @method($method)
            @endif
            <div class="container_text_input">
                <label class="label_data" for="name">{{ __('Nombre') }}</label>
                <input class="input_data" type="text" name="name" id="name" value="{{ old('name', $project->name) }}">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="container_text_input">
                <label class="label_data" for="description">{{ __('Descripción') }}</label>
                <textarea class="textarea_data" name="description" id="description">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="container_buttons">
                <a class="butto_cancel" href="{{ route('projects.index') }}">{{ __('Cancelar') }}</a>
                <button class="butto_save_project" type="submit">{{ $buttonText }}</button>
            </div>
        </form>
    </body>
</html>