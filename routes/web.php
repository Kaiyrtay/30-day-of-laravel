<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
// JOBS links
Route::get('/jobs', [JobController::class, 'list']);
Route::post('/jobs', [JobController::class, 'create']);
Route::get('/jobs/create', [JobController::class, 'redirect_to_create_view']);
Route::get('/jobs/{job}/edit', [JobController::class, 'redirect_to_edit_view']);
Route::get('/jobs/{job}', [JobController::class, 'detail']);
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


