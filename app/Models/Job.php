<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    
    // Match with 'job_listing' table instead of 'jobs' table
    protected $table = 'job_listing';

    protected $fillable = ['title', 'salary', 'description'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        /* 
        job key isn't following the convention (would be job_id) so I need
        specify on the foreingPivotKey parameter
        foreignPivotKey: is the key for current model
        relatedPivotKey: is the key for related model (the other)
        (check belongsToMany definition)
        */

        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');   
    }
}
