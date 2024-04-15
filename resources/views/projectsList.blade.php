<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Add the tailwind css CDN for the pagination since I couldn't do it with custom or native css -->
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Listado de proyectos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/format.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/projectsList.css') }}" type="text/css">
    </head>

    <body>
        <h2 class="title_project_list">
            {{ __('Proyectos') }}
        </h2>
        <div class="container_main">
            <div class="container_title_table_button_create">
                <h1 class="title_table_project_list">{{ __('Proyectos') }}</h1>
                <a class="butto_create" href="{{ route('projects.create') }}">Crear proyecto</a>
            </div>
            <table class="table_data">
                <thead>
                    <tr class="tr_headers">
                        <th>{{ __('Nombre') }}</th>
                        <th>{{ __('Descripción') }}</th>
                        <th>{{ __('Acciones') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr class="tr_fields">
                            <td class="td_data">{{ $project->name }}</td>
                            <td class="td_data">{{ $project->description }}</td>
                            <td class="td_data container_buttons">
                                <a class="button_edit" href="{{ route('projects.show', $project) }}">{{ __('Ver') }}</a>
                                <a class="button_view" href="{{ route('projects.edit', $project) }}">{{ __('Editar') }}</a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button_delete" type="submit">{{ __('Eliminar') }}</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="tr_no_projects">
                            <td>{{ __('No hay proyectos para mostrar') }}</td>
                        </tr>
                    @endforelse
                </tbody>
                @if ($projects->hasPages())
                    <tfoot>
                        <tr>
                            <td>
                                {{ $projects->links() }}
                            </td>
                        </tr>
                    </tfoot>
                @endif
            </table>
        </div>
    </body>
</html>