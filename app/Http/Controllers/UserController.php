<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index()
    {
        $users       = User::with('department')->orderBy('id')->get();
        $departments = Department::orderBy('name')->get();

        return view('users.index', compact('users', 'departments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'position'      => 'nullable|string|max:255',
            'email'         => 'required|email|max:255|unique:users,email',
            'mobile_no'     => ['nullable', 'string', 'max:20', 'regex:/^[0-9+\-\s()]{6,20}$/'],
            'department_id' => 'nullable|exists:departments,id',
            'is_admin'      => 'required|in:0,1',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'password'      => ['required', 'confirmed', Password::min(8)],
        ], [
            'mobile_no.regex' => 'Enter a valid mobile number (digits, +, -, spaces or brackets only).',
        ]);

        $data['password'] = Hash::make($data['password']);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request->file('image'));
        }

        User::create($data);

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'position'      => 'nullable|string|max:255',
            'email'         => 'required|email|max:255|unique:users,email,' . $user->id,
            'mobile_no'     => ['nullable', 'string', 'max:20', 'regex:/^[0-9+\-\s()]{6,20}$/'],
            'department_id' => 'nullable|exists:departments,id',
            'is_admin'      => 'required|in:0,1',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'password'      => ['nullable', 'confirmed', Password::min(8)],
        ], [
            'mobile_no.regex' => 'Enter a valid mobile number (digits, +, -, spaces or brackets only).',
        ]);

        // keep the current password unless a new one was typed
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        if ($request->hasFile('image')) {
            $this->deleteImage($user->image);
            $data['image'] = $this->uploadImage($request->file('image'));
        } else {
            unset($data['image']);
        }

        $user->update($data);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        if ($user->id === Auth::id()) {
            return redirect()->route('users.index')
                ->with('error', 'You cannot delete your own account.');
        }

        $this->deleteImage($user->image);
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }

    // ---------- helpers ----------
    private function uploadImage($file): string
    {
        $name = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/users'), $name);

        return 'uploads/users/' . $name;
    }

    private function deleteImage(?string $path): void
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
