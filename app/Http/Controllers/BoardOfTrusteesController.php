<?php

namespace App\Http\Controllers;

use App\Models\Bot;

class BoardOfTrusteesController extends Controller
{
    public function index()
    {
        $bots = Bot::orderBy('weight', 'asc')->get();

        return view('bot', compact('bots'));
    }
}