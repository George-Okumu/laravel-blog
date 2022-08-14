<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return view('welcome', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);
        // dd($id);

        return view('singleTask', compact('task'));
    }
}
