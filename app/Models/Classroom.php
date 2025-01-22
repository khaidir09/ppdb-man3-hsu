<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [];

    public function student()
    {
        return $this->hasMany(Student::class, 'classrooms_id');
    }
}
