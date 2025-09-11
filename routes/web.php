<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/', 'home');

Route::get('/jobs', function() {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function($id) {
    return view('job', [
        'jobSelected' => Job::find($id)
    ]);
});

Route::view('/contact', 'contact');
