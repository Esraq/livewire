<?php

namespace App\Http\Controllers;

use App\Models\AcademicCouncil;

class LatestAcademicCouncilController extends Controller
{
    public function index()
    {
        $academicCouncils = AcademicCouncil::orderBy('weight', 'asc')->get();

        return view('academic_council', compact('academicCouncils'));
    }
}