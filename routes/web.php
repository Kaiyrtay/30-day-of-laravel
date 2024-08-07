<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Option 1
// $jobs = [
//     [
//         'id' => 1,
//         'title' => 'Director',
//         'salary' => '$50,000'
//     ],
//     [
//         'id' => 2,
//         'title' => 'Programmer',
//         'salary' => '$10,000'
//     ],
//     [
//         'id' => 3,
//         'title' => 'Teacher',
//         'salary' => '$30,000'
//     ]
// ];
// Option 2
// class Job
// {
//     public static function all(): array
//     {
//         return [
//             [
//                 'id' => 1,
//                 'title' => 'Director',
//                 'salary' => '$50,000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Programmer',
//                 'salary' => '$10,000'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Teacher',
//                 'salary' => '$30,000'
//             ]
//         ];
//     }
// }

Route::get('/', function () {
    // $jobs = Job::all();
    // dd($jobs[0]->title);
    // die();
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// return view and array or data
Route::get('/jobs', function () { //use ($jobs) { // option 1
    return view('jobs', [
        'jobs' => Job::all() //$jobs // option 1
    ]);
});

Route::get('/jobs/{id}', function ($id) { //use ($jobs) { // option 1
    // Illuminate\Support\Arr::first($jobs, function($job) use($id){
    //     return $job['id'] == $id;
    // });
    // $job = Arr::first($jobs, fn($job) => $job['id'] == $id); // Option 1
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id); //Option 2
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});