<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{

    public function index(): View{
        return view('tasks.index',[
            'tasks' => Task::latest()->paginate(3)
        ]);
    }

    public function create(): View{
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request) : RedirectResponse{
        
        Task::create($request->all());
        return redirect()->route('tasks.index')
            ->withSuccess('Nova tarefa adicionada com sucesso');
    }


    public function show(Task $task) : View {
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function update(UpdateTaskRequest $request, Task $task) : RedirectResponse{
        $task->update($request->all());
        return redirect()->back()
            ->WithSuccess('Tarefa foi alterada com sucesso');
    }


    public function destroy(Task $tasks) : RedirectResponse{
        $tasks->delete();
        return redirect()->route('tasks.index')
            ->WithSuccess('Tarefa foi deletada com sucesso');
    }
}
