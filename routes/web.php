<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseFullController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [CourseFullController::class, 'index'])->name('courses.index');

