<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
// JOBS links
Route::get('/jobs', [JobController::class, 'list']);
Route::post('/jobs', [JobController::class, 'create']);
Route::view('/jobs/create', 'jobs.create');
Route::get('/jobs/{job}', [JobController::class, 'detail']);
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
Route::get('/jobs/{job}/edit', [JobController::class, 'redirect_to_edit_view']);

// php artisan route:list
// php artisan route:list --except-vendor