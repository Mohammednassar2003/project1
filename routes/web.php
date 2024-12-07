<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// GET request for 'about' page
Route::get('/about', function () {
    $name = 'Mohammed';
    $departments = [
        '1' => 'Technical',
        '2' => 'Financial',
        '3' => 'Sales',
    ];
    return view('about', compact('name', 'departments'));
});

// POST request for form submission
Route::post('/about', function () {
    $name = request('name'); // Use Laravel's `request()` helper
    $departments = [
        '1' => 'Technical',
        '2' => 'Financial',
        '3' => 'Sales',
    ];
    return view('about', compact('name', 'departments'));
});
Route::get('tasks',Function(){
    return view('tasks');
});
Route::post('create',function(){
    $task_name=$_POST['name'];
DB::table('tasks')-> insert(['name' => $task_name]);
    return view('tasks');
});