<?php

namespace App\Http\Controllers;

use App\Models\Alumni;

class LatestAlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::orderBy('created_at', 'desc')->get();

        return view('alumni', compact('alumni'));
    }

     public function show($id)
    {
        $alumni = Alumni::findOrFail($id);

        return view('alumni-details', compact('alumni'));
    }
}