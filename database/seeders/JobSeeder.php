<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

// Empty table before seed it
Job::truncate();

class JobSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_listing')->insert([
            'title' => 'Director',
            'salary' => '$40,000',
            'description' => 'On charge of take important desicions.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_listing')->insert([
            'title' => 'Programmer',
            'salary' => '$10,000',
            'description' => 'Develop all users applications.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_listing')->insert([
            'title' => 'Teacher',
            'salary' => '$30,000',
            'description' => 'Transmit knowledges to others.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
