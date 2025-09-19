<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Empty table before seed it
Job::truncate();

class JobSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::create([
            'title' => 'Director',
            'salary' => '$40,000',
            'employer_id' => 1,
            'description' => 'On charge of take important desicions.',
        ]);


        Job::create([
            'title' => 'Programmer',
            'salary' => '$10,000',
            'employer_id' => 1,
            'description' => 'Develop all users applications.',
        ]);

        Job::create([
            'title' => 'Teacher',
            'salary' => '$30,000',
            'employer_id' => 1,
            'description' => 'Transmit knowledges to others.',
        ]);
    }
}
