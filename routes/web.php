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
    $tables = DB::select("SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%';");

    $export = [];

    foreach ($tables as $table) {
        $tableName = $table->name;

        try {
            $export[$tableName] = DB::table($tableName)->get();
        } catch (\Exception $e) {
            $export[$tableName] = "Lỗi đọc bảng: " . $e->getMessage();
        }
    }

    return response()->json($export);
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [CourseFullController::class, 'index'])->name('courses.index');

