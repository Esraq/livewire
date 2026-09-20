<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('weight')->orderByDesc('id')->get();

        return view('banners.index', compact('banners'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'weight' => 'required|integer|min:0',
            'image'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'  => 'required|string|max:255',
            'slogan' => 'required|string|max:255',
        ]);

        $data['image'] = $request->file('image')->store('banners', 'public');

        Banner::create($data);

        return redirect()->route('banners.index')
            ->with('success', 'Banner created successfully.');
    }

    public function update(Request $request, Banner $banner)
    {
        $data = $request->validate([
            'weight' => 'required|integer|min:0',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'  => 'required|string|max:255',
            'slogan' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($banner->image);
            $data['image'] = $request->file('image')->store('banners', 'public');
        } else {
            unset($data['image']);   // keep the current image
        }

        $banner->update($data);

        return redirect()->route('banners.index')
            ->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        Storage::disk('public')->delete($banner->image);
        $banner->delete();

        return redirect()->route('banners.index')
            ->with('success', 'Banner deleted successfully.');
    }
}
