<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
// JOBS links
// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
//     Route::get('/jobs/{job}/edit', 'edit');
// });

Route::resource('jobs', JobController::class);
// Route::resource('jobs', JobController::class,[
//     // 'except' => ['edit']
//     'only' => ['index','show','store','create'] // no options update, delete
// ]);