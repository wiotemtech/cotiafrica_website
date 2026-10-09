<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title',
        'client_name',
        'type',
        'status',
        'description',
        'public_url',
        'image',
        'published',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];
}