<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Employer extends Model
{
    protected $fillable = [ 'name' ];
    
    public function job(): HasOne
    {
        return $this->hasOne(Job::class);
    }
}
