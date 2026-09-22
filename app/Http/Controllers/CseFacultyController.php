<?php

namespace App\Http\Controllers;

use App\Models\User;

class CseFacultyController extends Controller
{
    public function index()
    {
        $facultyMembers = User::where('department_id', 1)
            ->orderBy('id', 'asc')
            ->get();

        return view('cse-faculty', compact('facultyMembers'));
    }

 public function show($id)
{
    $faculty = User::with([
            'results',
            'trains',
            'teachings',
            'research',
            'publications',
            'awards',
            'experiences'
        ])
        ->where('department_id', 1)
        ->where('id', $id)
        ->firstOrFail();

    return view('cse-faculty-profile', compact('faculty'));
}

}