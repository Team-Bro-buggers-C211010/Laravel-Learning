<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

// store
Route::post('/jobs', function () {
    // validation
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

// edit page
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', [
        'job' => $job
    ]);
});

// update
Route::patch('/jobs/{id}', function ($id) {
    // validation
    request()->validate([
        'title' => [
            'required',
            'min:3',
        ],
        'salary' => [
            'required',
        ]
    ]);

    // findOrFail will throw an exception if the job is not found
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs/' . $id);
});

// destroy
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);

    $job->delete();

    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});
