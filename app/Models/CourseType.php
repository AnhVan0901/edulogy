<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseType extends Model
{
    protected $fillable = ['name', 'description'];

    // Một loại khóa học có nhiều khóa học
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
