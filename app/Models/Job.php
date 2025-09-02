<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000',
                'description' => "In charge of the company's productivity.",
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000',
                'description' => "Is the indispensable workfoce.",
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000',
                'description' => "Transmits the knoledges to new generations.",
            ]
        ];
    }

    // Return the first array found with that id parameter
    public static function find(int $id): array 
    {
        return Arr::first(static::all(), fn($job) => $job['id'] == $id) ?? abort(404);
    }
}
