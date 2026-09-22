<?php

namespace App\Http\Controllers;

use App\Models\Notice;

class LatestNoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::orderBy('date', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return view('notice', compact('notices'));
    }
}