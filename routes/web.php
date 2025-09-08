<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/', 'home');

Route::get('/jobs', function() {
    $jobs = Job::all();
    
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function($id) {
    return view('job', [
        'jobSelected' => Job::find($id)
    ]);
});

Route::view('/contact', 'contact');
