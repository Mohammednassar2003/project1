<?php

use Illuminate\Support\Facades\Route;

Route::get('git branch
/', function () {
    return view('welcome');
});
Route::get('/about',Function(){
    $name='mohammed';
return view ('about')->with('name',$name);
});
