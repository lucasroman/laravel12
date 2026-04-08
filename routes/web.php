<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/', 'home');

Route::get('/jobs', function() {
    /* Not use "Job::all()" because require more queries, one query more by 
    each employer, insted use Eager Loading as shown below */
    $jobs = Job::with('employer')->simplePaginate(5);
    
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    dd('Hi from create route');
});

Route::get('/jobs/{id}', function($id) {
    return view('job', [
        'jobSelected' => Job::find($id)
    ]);
});


Route::view('/contact', 'contact');
