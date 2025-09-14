<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $jobs = Job::all();
    // dd($jobs);
    return view('home');
});

Route::get('/jobs', function () {
    // $jobs = Job::all();
    // to solve the n+1 problem, we can use eager loading
    // $jobs = Job::with('employer')->get();

    // $jobs = Job::with('employer')->get();

    // for add pagination
    $jobs = Job::with('employer')->latest()->paginate(10);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', [
        'job' => $job
    ]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => [
            'required',
            'min:3',
        ],
        'salary' => [
            'required',
        ]
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 200
    ]);

    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});
