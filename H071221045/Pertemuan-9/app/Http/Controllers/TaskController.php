<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();

        return redirect()->route('tasks.index');
    }
    

    public function edit(Task $task)
    {
        return view('edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
