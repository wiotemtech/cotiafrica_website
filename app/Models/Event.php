<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'event_date',
        'start_time',
        'location',
        'join_url',
        'recording_url',
        'image',
        'published',
    ];

    protected $casts = [
        'event_date' => 'date',
        'published' => 'boolean',
    ];
}