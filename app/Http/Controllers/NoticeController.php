<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    private const FILE_TYPES = 'pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png';

    public function index()
    {
        $notices = Notice::orderByDesc('date')->orderByDesc('id')->get();

        return view('notices.index', compact('notices'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image'     => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'     => 'required|string|max:255',
            'file_name' => 'required|file|mimes:' . self::FILE_TYPES . '|max:5120',
            'date'      => 'required|date',
        ]);

        $data['image']     = $request->file('image')->store('notices/images', 'public');
        $data['file_name'] = $request->file('file_name')->store('notices/files', 'public');

        Notice::create($data);

        return redirect()->route('notices.index')
            ->with('success', 'Notice created successfully.');
    }

    public function update(Request $request, Notice $notice)
    {
        $data = $request->validate([
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'     => 'required|string|max:255',
            'file_name' => 'nullable|file|mimes:' . self::FILE_TYPES . '|max:5120',
            'date'      => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($notice->image);
            $data['image'] = $request->file('image')->store('notices/images', 'public');
        } else {
            unset($data['image']);
        }

        if ($request->hasFile('file_name')) {
            Storage::disk('public')->delete($notice->file_name);
            $data['file_name'] = $request->file('file_name')->store('notices/files', 'public');
        } else {
            unset($data['file_name']);
        }

        $notice->update($data);

        return redirect()->route('notices.index')
            ->with('success', 'Notice updated successfully.');
    }

    public function destroy(Notice $notice)
    {
        Storage::disk('public')->delete([$notice->image, $notice->file_name]);
        $notice->delete();

        return redirect()->route('notices.index')
            ->with('success', 'Notice deleted successfully.');
    }
}
