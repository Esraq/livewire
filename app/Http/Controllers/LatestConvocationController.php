<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Convocation;

class LatestConvocationController extends Controller
{
       public function index()
    {
        $convocations = Convocation::orderBy('created_at', 'desc')->get();

        return view('convocations', compact('convocations'));
    }

    public function show($id)
    {
        $convocation = Convocation::findOrFail($id);

        return view('convocation-details', compact('convocation'));
    }
}
