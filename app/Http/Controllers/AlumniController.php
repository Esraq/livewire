<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::latest('id')->get();

        return view('alumni.index', compact('alumnis'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string|max:2000',
        ]);

        $data['image'] = $request->file('image')->store('alumni', 'public');

        Alumni::create($data);

        return redirect()->route('alumni.index')
            ->with('success', 'Alumni created successfully.');
    }

    public function update(Request $request, Alumni $alumni)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string|max:2000',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($alumni->image);
            $data['image'] = $request->file('image')->store('alumni', 'public');
        } else {
            unset($data['image']);   // keep the current image
        }

        $alumni->update($data);

        return redirect()->route('alumni.index')
            ->with('success', 'Alumni updated successfully.');
    }

    public function destroy(Alumni $alumni)
    {
        Storage::disk('public')->delete($alumni->image);
        $alumni->delete();

        return redirect()->route('alumni.index')
            ->with('success', 'Alumni deleted successfully.');
    }
}
