<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    protected $guarded = [];

    public function flow(): BelongsTo
    {
        return $this->belongsTo(Flow::class, 'flows_id', 'id');
    }
}
