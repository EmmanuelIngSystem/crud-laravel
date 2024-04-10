<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class ProjectController extends Controller
{
    public function index(): Renderable{
        // dd(Project::paginate());
        $projects = Project::paginate(); // por defecto hace un paginado de 15 registros por pagina. Tambien puedes indicarlos los que desees por parametro
        return view('projectsList', compact('projects'));
    }

    public function create(): Renderable{
        $project = new Project;
        $title = __('Crear proyecto');
        $action = route('projects.store');
        $buttonText = __('Crear proyecto');
        return view('projects.form', compact('project', 'title', 'action', 'buttonText'));
    }

    public function store(Request $request) :RedirectResponse{
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'string'    => 'El :attribute debe ser un texto.',
            'unique'    => 'El :attribute debe ser unico.',
            'max'    => 'El :attribute excedio la longitud permitida.',
        ]; // personalizamos los mensajes de las validaciones
        $request->validate([
            'name' => 'required|unique:projects,name|string|max:10',
            'description' => 'required|string|max:1000'
        ], $messages); // pasamos como parametro del validate laravel la variable de personalziacion de mensajes
        Project::create([
            'name' => $request->string('name'),
            'description' => $request->string('description')
        ]);
        return redirect()->route('projects.index');
    }

    public function show(Project $project): Renderable{
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project): Renderable{
        $title = __('Editar proyecto');
        $action = route('projects.update', $project);
        $buttonText = __('Actualizazr proyecto');
        $method = 'PUT';
        return view('projects.form', compact('project', 'title', 'action', 'buttonText', 'method'));
    }

    public function update(Request $request, Project $project) : RedirectResponse{
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'string'    => 'El :attribute debe ser un texto.',
            'unique'    => 'El :attribute debe ser unico.',
            'max'    => 'El :attribute excedio la longitud permitida.',
        ]; // personalizamos los mensajes de las validaciones
        $request->validate([
            'name' => 'required|unique:projects,name,' . $project->id . '|string|max:100',
            'description' => 'required|string|max:1000'
        ], $messages); // pasamos como parametro del validate laravel la variable de personalziacion de mensajes
        $project->update([
            'name' => $request->string('name'),
            'description' => $request->string('description')
        ]);
        return redirect()->route('projects.index');
    }

    public function destroy(Project $project): RedirectResponse{
        $project->delete();
        return redirect()->route('projects.index');
    }

}
