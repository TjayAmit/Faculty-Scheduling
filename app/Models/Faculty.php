<?php

namespace App\Models;

use Database\Factories\FacultyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    /** @use HasFactory<FacultyFactory> */
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
