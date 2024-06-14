<?php


use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('fetch',[UserController::class,'fetch']); //many to many