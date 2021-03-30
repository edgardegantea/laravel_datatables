<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');

Route::resources([
    'students' => StudentController::class,
]);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
