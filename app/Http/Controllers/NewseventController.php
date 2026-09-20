<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class NewsEventController extends Controller
{
    public function index()
    {
        $newsEvents = NewsEvent::orderByDesc('date')->get();

        return view('news_events.index', compact('newsEvents'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'date'        => 'required|date',
        ]);

        $data['image'] = $this->uploadImage($request->file('image'));

        NewsEvent::create($data);

        return redirect()->route('news-events.index')
            ->with('success', 'News & Event created successfully.');
    }

    public function update(Request $request, NewsEvent $newsEvent)
    {
        $data = $request->validate([
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'date'        => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($newsEvent->image);
            $data['image'] = $this->uploadImage($request->file('image'));
        } else {
            unset($data['image']);
        }

        $newsEvent->update($data);

        return redirect()->route('news-events.index')
            ->with('success', 'News & Event updated successfully.');
    }

    public function destroy(NewsEvent $newsEvent)
    {
        $this->deleteImage($newsEvent->image);
        $newsEvent->delete();

        return redirect()->route('news-events.index')
            ->with('success', 'News & Event deleted successfully.');
    }

    // ---------- helpers ----------
    private function uploadImage($file): string
    {
        $name = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/news-events'), $name);

        return 'uploads/news-events/' . $name;
    }

    private function deleteImage(?string $path): void
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
