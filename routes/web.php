<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('student',[StudentController::class,'show']);  //one to one

Route::get('user',[UserController::class,'show']);  //one to many

Route::get('fetch',[UserController::class,'fetch']); //many to many