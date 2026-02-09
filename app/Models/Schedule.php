<?php

namespace App\Models;

use Database\Factories\ScheduleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /** @use HasFactory<ScheduleFactory> */
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'instructor_id',
        'day_of_week',
        'start_time',
        'end_time',
        'semester',
        'academic_year',
    ];

    public $timestamps = true;

    protected $casts = [
        'day_of_week' => 'array',
    ];
}
