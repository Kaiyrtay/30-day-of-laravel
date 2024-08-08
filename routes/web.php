<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Route::get('/', function () {
//     return view('home');
// });
// the same as
Route::view('/','home');
// Route::get('/about', function () {
//     return view('about');
// });
// the same as
Route::view('/about','about');
// Route::get('/contact', function () {
//     return view('contact');
// });
// the same as
Route::view('/contact','contact');
// JOBS links
Route::get('/jobs', [JobController::class, 'list']);
Route::post('/jobs', [JobController::class, 'create']);
Route::view('/jobs/create', 'jobs.create');
Route::get('/jobs/{job}/edit', [JobController::class, 'redirect_to_edit_view']);
Route::get('/jobs/{job}', [JobController::class, 'detail']);
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


