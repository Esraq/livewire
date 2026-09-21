<?php

namespace App\Http\Controllers;

use App\Models\AcademicCouncil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AcademicCouncilController extends Controller
{
    public function index()
    {
        // lower weight shows first
        $academicCouncils = AcademicCouncil::orderBy('weight')->orderBy('id')->get();

        return view('academic_councils.index', compact('academicCouncils'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'weight'   => 'required|integer|min:0',
            'name'     => 'required|string|max:255',
            'image'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'position' => 'required|string|max:255',
        ]);

        $data['image'] = $this->uploadImage($request->file('image'));

        AcademicCouncil::create($data);

        return redirect()->route('academic-councils.index')
            ->with('success', 'Academic council member created successfully.');
    }

    public function update(Request $request, AcademicCouncil $academicCouncil)
    {
        $data = $request->validate([
            'weight'   => 'required|integer|min:0',
            'name'     => 'required|string|max:255',
            'image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'position' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($academicCouncil->image);
            $data['image'] = $this->uploadImage($request->file('image'));
        } else {
            unset($data['image']);
        }

        $academicCouncil->update($data);

        return redirect()->route('academic-councils.index')
            ->with('success', 'Academic council member updated successfully.');
    }

    public function destroy(AcademicCouncil $academicCouncil)
    {
        $this->deleteImage($academicCouncil->image);
        $academicCouncil->delete();

        return redirect()->route('academic-councils.index')
            ->with('success', 'Academic council member deleted successfully.');
    }

    // ---------- helpers ----------
    private function uploadImage($file): string
    {
        $name = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/academic-councils'), $name);

        return 'uploads/academic-councils/' . $name;
    }

    private function deleteImage(?string $path): void
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
