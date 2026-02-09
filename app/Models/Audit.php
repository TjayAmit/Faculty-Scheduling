<?php

namespace App\Models;

use Database\Factories\AuditFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    /** @use HasFactory<AuditFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action',
        'description',
        'type',
        'meta'
    ];

    public $timestamps = true;

    protected $casts = [
        'meta' => 'array',
    ];

}
