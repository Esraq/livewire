<?php

namespace App\Http\Controllers;

use App\Models\Syndicate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SyndicateController extends Controller
{
    public function index()
    {
        // lower weight shows first
        $syndicates = Syndicate::orderBy('weight')->orderBy('id')->get();

        return view('syndicates.index', compact('syndicates'));
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

        Syndicate::create($data);

        return redirect()->route('syndicates.index')
            ->with('success', 'Syndicate member created successfully.');
    }

    public function update(Request $request, Syndicate $syndicate)
    {
        $data = $request->validate([
            'weight'   => 'required|integer|min:0',
            'name'     => 'required|string|max:255',
            'image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'position' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($syndicate->image);
            $data['image'] = $this->uploadImage($request->file('image'));
        } else {
            unset($data['image']);
        }

        $syndicate->update($data);

        return redirect()->route('syndicates.index')
            ->with('success', 'Syndicate member updated successfully.');
    }

    public function destroy(Syndicate $syndicate)
    {
        $this->deleteImage($syndicate->image);
        $syndicate->delete();

        return redirect()->route('syndicates.index')
            ->with('success', 'Syndicate member deleted successfully.');
    }

    // ---------- helpers ----------
    private function uploadImage($file): string
    {
        $name = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/syndicates'), $name);

        return 'uploads/syndicates/' . $name;
    }

    private function deleteImage(?string $path): void
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
