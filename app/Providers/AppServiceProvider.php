<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Course;
use App\Models\CourseType;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share dữ liệu 'courses' và 'courseTypes' với tất cả view
        View::composer('*', function ($view) {
            $courses = Course::with(['courseType', 'teacher'])->get();
            $courseTypes = CourseType::all();

            $view->with(compact('courses', 'courseTypes'));
        });
    }
}
