<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseFullController extends Controller
{
    public function index()
    {
        return view('Course.course_full');
    }
}
