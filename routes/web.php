<?php

use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // $tasks = DB::table('tasks')->get(); before creating a model
//     //for an api return the below
//     // return $tasks;

//     $tasks = Task::all();
//     return view('welcome', compact('tasks'));
// });


// Route::get('task/{task}', function($id){
    
//     $task = Task::find($id);
//     // dd($id);

//     return view('singleTask', compact('task'));
// });


// Route::get('task/{task}', [App\Http\Controllers\TasksController::class, 'show']);
// Route::get('/home', [App\Http\Controllers\TasksController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\PostsController::class, 'index'])->name('home');
Route::get('create/posts', [App\Http\Controllers\PostsController::class, 'create']);
Route::post('/posts', [App\Http\Controllers\PostsController::class, 'store']);
Route::get('post/{post}', [App\Http\Controllers\PostsController::class, 'show']);

Route::post('post/{post}/comments', [App\Http\Controllers\CommentsController::class, 'store']);

Route::get('register', [App\Http\Controllers\RegistrationController::class, 'create']);
Route::post('register', [App\Http\Controllers\RegistrationController::class, 'store']);


Route::get('/login', [App\Http\Controllers\SessionsController::class, 'create'])->name('login');
Route::get('/logout', [App\Http\Controllers\SessionsController::class, 'destroy']);
Route::post('/login', [App\Http\Controllers\SessionsController::class, 'store']);

