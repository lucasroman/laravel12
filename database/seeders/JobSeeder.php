<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class JobSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
    */
    public function run(): void
    {
        // Empty table before seed it
        Schema::disableForeignKeyConstraints();
        Job::truncate();
        Schema::enableForeignKeyConstraints();

        // Create 3 default employers for asociate them to a job
        $employers = Employer::factory(3)->create();

        Job::create([
            'title' => 'Director',
            'salary' => '$40,000',
            'employer_id' => $employers[0]->id,
            'description' => 'On charge of take important desicions.',
        ]);
            
        Job::create([
            'title' => 'Programmer',
            'salary' => '$10,000',
            'employer_id' => $employers[1]->id,
            'description' => 'Develop all users applications.',
        ]);
            
        Job::create([
            'title' => 'Teacher',
            'salary' => '$30,000',
            'employer_id' => $employers[2]->id,
            'description' => 'Transmit knowledges to others.',
        ]);

        Job::factory(12)->create();
    }
}
                    