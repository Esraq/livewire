<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Show the update-password form for the logged-in user.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('update_password.edit');
    }

    /**
     * Update the logged-in user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password'         => [
                'required',
                'confirmed',
                Password::min(8)->letters()->numbers(),
                'different:current_password',
            ],
        ], [
            'current_password.current_password' => 'The current password is incorrect.',
            'password.different'                => 'The new password must be different from the current password.',
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()
            ->route('update-password.edit')
            ->with('success', 'Password updated successfully.');
    }
}
