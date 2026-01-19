<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    public function jobs()
    {
        /* 
        job key isn't following the convention (would be job_id) so I need
        specify on the foreingPivotKey parameter
        foreignPivotKey: is the key for current model
        relatedPivotKey: is the key for related model (the other)
        (check belongsToMany definition)
        */
        return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id'); 
    }
}
