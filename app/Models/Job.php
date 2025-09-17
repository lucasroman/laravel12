<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory;
    
    // Match with 'job_listing' table instead of 'jobs' table
    protected $table = 'job_listing';

    protected $fillable = ['title', 'salary', 'description'];
}
