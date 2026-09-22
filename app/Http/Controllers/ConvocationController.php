<?php

namespace App\Http\Controllers;

use App\Models\Convocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ConvocationController extends Controller
{
    public function index()
    {
        $convocations = Convocation::latest()->get();

        return view('convocations.index', compact('convocations'));
    }

   public function store(Request $request)
{
    $data = $request->validate([
        'title'       => 'required|string|max:255',
        'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        'description' => 'nullable|string',
    ]);

    // Store image inside storage/app/public/convocations
    $data['image'] = $request->file('image')
        ->store('convocations', 'public');

    Convocation::create($data);

    return redirect()
        ->route('convocations.index')
        ->with('success', 'Convocation created successfully.');
}

    public function update(Request $request, Convocation $convocation)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($convocation->image);
            $data['image'] = $this->uploadImage($request->file('image'));
        } else {
            unset($data['image']);
        }

        $convocation->update($data);

        return redirect()->route('convocations.index')
            ->with('success', 'Convocation updated successfully.');
    }

    public function destroy(Convocation $convocation)
    {
        $this->deleteImage($convocation->image);
        $convocation->delete();

        return redirect()->route('convocations.index')
            ->with('success', 'Convocation deleted successfully.');
    }

    // ---------- helpers ----------
    private function uploadImage($file): string
    {
        $name = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/convocations'), $name);

        return 'uploads/convocations/' . $name;
    }

    private function deleteImage(?string $path): void
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}