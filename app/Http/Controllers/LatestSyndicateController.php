<?php

namespace App\Http\Controllers;

use App\Models\Syndicate;

class LatestSyndicateController extends Controller
{
    public function index()
    {
        $syndicates = Syndicate::orderBy('weight', 'asc')->get();

        return view('syndicate', compact('syndicates'));
    }
}