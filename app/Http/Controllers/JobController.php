<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // সব jobs দেখাও
    public function index()
    {
        $jobs = Listing::all();
        return view('jobs', ['jobs' => $jobs]);
    }

    // form দেখাও
    public function create()
    {
        return view('jobs-create');
    }

    // form submit হলে save করো
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'email' => 'required|email',
            'description' => 'required',
        ]);

        Listing::create([
            'title' => $request->title,
            'company' => $request->company,
            'location' => $request->location,
            'salary' => $request->salary,
            'email' => $request->email,
            'type' => $request->type ?? 'full-time',
            'description' => $request->description,
        ]);

        return redirect('/jobs');
    }

    public function destroy($id)
    {
        $job = Listing::find($id);
        $job->delete();
        return redirect('/jobs');
    }

    public function edit($id)
    {
        $job = Listing::find($id);
        return view('jobs-edit', ['job' => $job]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'email' => 'required|email',
            'description' => 'required',
        ]);

        $job = Listing::find($id);
        $job->update([
            'title' => $request->title,
            'company' => $request->company,
            'location' => $request->location,
            'salary' => $request->salary,
            'email' => $request->email,
            'type' => $request->type ?? 'full-time',
            'description' => $request->description,
        ]);

        return redirect('/jobs');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $jobs = Listing::where('title', 'LIKE', "%$keyword%")->get();

        $html = '';
        foreach ($jobs as $job) {
            $html .= "<h3>{$job->title}</h3>";
            $html .= "<p>{$job->company}</p>";
            $html .= "<hr>";
        }

        return response($html);
    }
}
