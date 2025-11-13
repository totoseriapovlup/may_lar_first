<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use \Illuminate\Http\Request;
use \App\Models\Task;

Route::get('/', function () {
    //home page
    return view('welcome');
})->name('home');

Route::get('/tasks', function () {
    //all tasks
    return view('task.index', [
        'tasks' => Task::all(),
    ]);
})->name('task.index');

Route::get('/task/create', function (){
    //create form
    return view('task.create');
})->name('task.create');

Route::post('/task', function (Request $request){
    //store
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if($validator->fails()){
        return redirect()
            ->route('task.create')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task();
    $task->name = $request->name;
    $task->save();
    return redirect()->route('task.index');
})->name('task.store');

Route::delete('/task/{task}', function (Task $task){
    //delete
    $task->delete();
    return redirect()->route('task.index');
})->name('task.destroy');