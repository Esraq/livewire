<?php

namespace App\Http\Controllers;

use App\Models\Bot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BotController extends Controller
{
    public function index()
    {
        // lower weight shows first
        $bots = Bot::orderBy('weight')->orderBy('id')->get();

        return view('bots.index', compact('bots'));
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

        Bot::create($data);

        return redirect()->route('bots.index')
            ->with('success', 'Board member created successfully.');
    }

    public function update(Request $request, Bot $bot)
    {
        $data = $request->validate([
            'weight'   => 'required|integer|min:0',
            'name'     => 'required|string|max:255',
            'image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'position' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($bot->image);
            $data['image'] = $this->uploadImage($request->file('image'));
        } else {
            unset($data['image']);
        }

        $bot->update($data);

        return redirect()->route('bots.index')
            ->with('success', 'Board member updated successfully.');
    }

    public function destroy(Bot $bot)
    {
        $this->deleteImage($bot->image);
        $bot->delete();

        return redirect()->route('bots.index')
            ->with('success', 'Board member deleted successfully.');
    }

    // ---------- helpers ----------
    private function uploadImage($file): string
    {
        $name = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/bots'), $name);

        return 'uploads/bots/' . $name;
    }

    private function deleteImage(?string $path): void
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
