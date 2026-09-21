<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;



class ProfileController extends Controller
{
    /**
     * Display the profile page.
     * Fetches the fixed user record (id = 2) in view-only mode.
     *
     * @return \Illuminate\Http\Response
     */
     public function show()
    {
        $user = Auth::user()->load('department');

        return view('profile.show', compact('user'));
    }

}
