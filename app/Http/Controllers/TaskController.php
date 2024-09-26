<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{   // Muestra la lista de tareas y el formulario para agregar una nueva tarea
    public function index()
    {   
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    // Almacena una nueva tarea en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        // Crear una nueva tarea en la base de datos con el nombre proporcionado
        Task::create($request->only('name'));
        return redirect()->route('tasks.index');
    }
    // Elimina una tarea específica de la base de datos
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}

