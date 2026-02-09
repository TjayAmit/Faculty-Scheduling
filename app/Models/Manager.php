<?php

namespace App\Models;

use Database\Factories\ManagerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    /** @use HasFactory<ManagerFactory> */
    use HasFactory;

    protected $fillable = [
        'company_id',
        'license_no',
        'first_name',
        'last_name',
        'middle_name',
        'phone',
        'email',
        'dob',
        'gender',
        'marital_status',
        'nationality',
    ];

    public $timestamps = true;

    protected $casts = [
        'deleted_at' => 'datetime',
    ];
}
