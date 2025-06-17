<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseFullController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/db-export', function () {
    $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();

    $export = [];

    foreach ($tables as $table) {
        try {
            $export[$table] = DB::table($table)->get();
        } catch (\Exception $e) {
            $export[$table] = "Error reading table: " . $e->getMessage();
        }
    }

    return response()->json($export);
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [CourseFullController::class, 'index'])->name('courses.index');

