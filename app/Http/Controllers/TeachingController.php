<?php

namespace App\Http\Controllers;

use App\Models\Teaching;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeachingController extends Controller
{
    /**
     * Rules shared by store() and update().
     */
    private function rules(): array
    {
        return [
            'serial_no'    => 'required|integer',
            'subject_name' => 'required|string|max:255',
        ];
    }

    /**
     * Query limited to the logged-in user's subjects (faculty_id = users.id).
     */
    private function ownSubjects()
    {
        return Teaching::where('faculty_id', Auth::id());
    }

    /**
     * Display only the logged-in user's subjects.
     */
    public function index()
    {
        $subjects = $this->ownSubjects()->latest()->paginate(5);

        return view('faculty.subject', compact('subjects'))
                    ->with('i', (request()->input('page', 1) - 1) * 5)
                    ->with('editSubject', null);
    }

    public function create()
    {
        return view('faculty.subject');
    }

    /**
     * Store a subject for the logged-in user.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $subject = new Teaching($validated);
        // faculty_id is the logged-in user's id, never taken from the form
        $subject->faculty_id = Auth::id();
        $subject->save();

        return redirect()->route('subjects.index')
                        ->with('success', 'Subject added successfully.');
    }

    public function show($id)
    {
        $subject = $this->ownSubjects()->findOrFail($id);

        return view('faculty.show', compact('subject'));
    }

    public function edit($id)
    {
        // 404 if the record belongs to someone else
        $editSubject = $this->ownSubjects()->findOrFail($id);
        $subjects    = $this->ownSubjects()->latest()->paginate(5);

        return view('faculty.subject', compact('subjects', 'editSubject'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate($this->rules());

        $subject = $this->ownSubjects()->findOrFail($id);
        $subject->update($validated);

        return redirect()->route('subjects.index')
                        ->with('success', 'Subject updated successfully.');
    }

    public function destroy($id)
    {
        $subject = $this->ownSubjects()->findOrFail($id);
        $subject->delete();

        return redirect()->route('subjects.index')
                        ->with('success', 'Subject deleted successfully.');
    }
}