<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
// JOBS links
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'list');
    Route::post('/jobs', 'create');
    Route::view('/jobs/create', 'jobs.create');
    Route::get('/jobs/{job}', 'detail');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
    Route::get('/jobs/{job}/edit', 'redirect_to_edit_view');
});

