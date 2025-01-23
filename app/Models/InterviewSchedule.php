<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterviewSchedule extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(InterviewSession::class, 'interview_schedules_id');
    }
}
