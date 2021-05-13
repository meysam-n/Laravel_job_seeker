<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'company',
        'apply_date',
        'post_url',
        'salary',
        'deadline',
        'address',
        'city',
        'state',
        'zip',

    ];
}
