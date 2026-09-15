<?php

namespace App\Http\Controllers;

use App\Models\User;

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
        $user = User::findOrFail(2);

        return view('profile.show', compact('user'));
    }
}
