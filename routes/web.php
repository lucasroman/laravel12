<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/', 'home');

Route::get('/jobs', function() {
    /* Not use "Job::all()" because require more queries, one query more by 
    each employer, insted use Eager Loading as shown below */
    $jobs = Job::with('employer')->simplePaginate(5);
    
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', [
        'jobSelected' => $job
    ]);
});

Route::post('/jobs', function () {
    dd(request()->only(['title', 'salary']));
});

Route::view('/contact', 'contact');
