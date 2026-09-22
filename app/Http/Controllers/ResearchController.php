<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResearchController extends Controller
{
    /**
     * Rules shared by store() and update().
     */
    private function rules(): array
    {
        return [
            'serial_no'         => 'required|integer',
            'research_interest' => 'required|string|max:255',
        ];
    }

    /**
     * Query limited to the logged-in user's research interests (faculty_id = users.id).
     */
    private function ownResearches()
    {
        return Research::where('faculty_id', Auth::id());
    }

    /**
     * Display only the logged-in user's research interests.
     */
    public function index()
    {
        $researches = $this->ownResearches()->latest()->paginate(5);

        return view('faculty.research', compact('researches'))
                    ->with('i', (request()->input('page', 1) - 1) * 5)
                    ->with('editResearch', null);
    }

    public function create()
    {
        return view('faculty.research');
    }

    /**
     * Store a research interest for the logged-in user.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $research = new Research($validated);
        // faculty_id is the logged-in user's id, never taken from the form
        $research->faculty_id = Auth::id();
        $research->save();

        return redirect()->route('researches.index')
                        ->with('success', 'Research interest added successfully.');
    }

    public function show($id)
    {
        $research = $this->ownResearches()->findOrFail($id);

        return view('faculty.show', compact('research'));
    }

    public function edit($id)
    {
        // 404 if the record belongs to someone else
        $editResearch = $this->ownResearches()->findOrFail($id);
        $researches   = $this->ownResearches()->latest()->paginate(5);

        return view('faculty.research', compact('researches', 'editResearch'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate($this->rules());

        $research = $this->ownResearches()->findOrFail($id);
        $research->update($validated);

        return redirect()->route('researches.index')
                        ->with('success', 'Research interest updated successfully.');
    }

    public function destroy($id)
    {
        $research = $this->ownResearches()->findOrFail($id);
        $research->delete();

        return redirect()->route('researches.index')
                        ->with('success', 'Research interest deleted successfully.');
    }
}