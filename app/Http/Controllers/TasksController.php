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
        return view('tasks/allTasks', compact('tasks'));
    }

    public function show(Task $task)
    {
        //Task $task This is known as wild card, (Route model binding.), The name should be the same as the one from the routes:
        //In my case it was task/{task},
        // This replaces the below task
        // $task = Task::findorFail($id);
        // dd($id);

        return view('tasks/singleTask', compact('task'));
    }
}
