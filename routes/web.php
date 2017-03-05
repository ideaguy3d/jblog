<?php

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


Route::get('/', function () {

    $tasks = DB::table('tasks')->get();

    // return $tasks; // Will return raw json. Good for API's.

    return view('welcome', [
        'tasks'=>$tasks
    ]);

});

Route::get('/about', function () {
    return view('about');
});

Route::get('/todos', function () {
    $tasks = [
        'Study PHP',
        'Study MySQL',
        'Study MongoDB'
    ];

    return view('todos', compact('tasks'));
});

Route::get('/todos', function() {
    $tasks = DB::table('tasks')->get();

    return view('tasks.index', compact('tasks'));
});

Route::get('/todos/{task}', function ($id) {

//    dd($id);  // quick helper function to respond w/ a string.

    $task = DB::table('tasks')->find($id);

//    dd($tasks);

    return view('tasks.show', compact('task'));

});

