<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(3);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'integer']
        ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 2
        ]);
        return redirect('/jobs');
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);

    }
    public function update(Job $job)
    {
        Gate::authorize('edit-job', $job);

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'integer']
        ]);
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        return redirect('/jobs/' . $job->id);
    }
    public function destroy(Job $job)
    {
        Gate::authorize('edit-job', $job);
        $job->delete();
        return redirect('/jobs');
    }
    public function edit(Job $job)
    {
        //STEP 1
        // if (Auth::guest()) {
        //     return redirect('/login');
        // }
        // if ($job->employer->user->isNot(Auth::user())) {
        //     abort(403);
        // }
        // STEP 2
        // Gate::define('edit-job', function (User $user, Job $job) {
        //     return $job->employer->user->is($user);
        // });
        // STEP 3
        // OPTION 1
        Gate::authorize('edit-job', $job);
        //::denies 
        // OPTION 2
        // if (Auth::user()->cannot('edit-job', $job)) {
        //     abort(403);
        // }
        return view('jobs.edit', ['job' => $job]);
    }
}
