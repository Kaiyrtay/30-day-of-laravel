<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function list()
    {
        $jobs = Job::with('employer')->latest()->paginate(3);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }
    public function redirect_to_edit_view(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }
    public function create()
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
    public function detail(Job $job)
    {
        return view('jobs.show', ['job' => $job]);

    }
    public function update(Job $job)
    {
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
        $job->delete();
        return redirect('/jobs');
    }

}
