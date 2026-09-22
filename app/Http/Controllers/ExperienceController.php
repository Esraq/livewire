<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    /**
     * Query limited to the logged-in user's experiences (faculty_id = users.id).
     */
    private function ownExperiences()
    {
        return Experience::where('faculty_id', Auth::id());
    }

    /**
     * Display only the logged-in user's experiences (single page with inline add/edit form).
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = $this->ownExperiences()->orderBy('serial_no')->paginate(10);

        return view('experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Not used - creation is handled via the inline form on the index page.
    }

    /**
     * Store an experience for the logged-in user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'serial_no'        => 'required|integer|unique:experiences,serial_no',
            'institution_name' => 'required|string|max:255',
            'position'         => 'required|string|max:255',
            'start_date'       => 'required|date',
            'end_date'         => 'nullable|date|after_or_equal:start_date',
        ]);

        $experience = new Experience($validated);
        // faculty_id is the logged-in user's id, never taken from the form
        $experience->faculty_id = Auth::id();
        $experience->save();

        return redirect()
            ->route('experiences.index')
            ->with('success', 'Experience added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Not used - single-page CRUD shows data inline in the table.
    }

    /**
     * Show the form for editing the specified resource.
     * Renders the same index view, with $editExperience set so the
     * shared form pre-fills and switches into "Edit" mode.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 404 if the record belongs to someone else
        $editExperience = $this->ownExperiences()->findOrFail($id);
        $experiences    = $this->ownExperiences()->orderBy('serial_no')->paginate(10);

        return view('experiences.index', compact('experiences', 'editExperience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $experience = $this->ownExperiences()->findOrFail($id);

        $validated = $request->validate([
            'serial_no'        => 'required|integer|unique:experiences,serial_no,' . $experience->id,
            'institution_name' => 'required|string|max:255',
            'position'         => 'required|string|max:255',
            'start_date'       => 'required|date',
            'end_date'         => 'nullable|date|after_or_equal:start_date',
        ]);

        $experience->update($validated);

        return redirect()
            ->route('experiences.index')
            ->with('success', 'Experience updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = $this->ownExperiences()->findOrFail($id);
        $experience->delete();

        return redirect()
            ->route('experiences.index')
            ->with('success', 'Experience deleted successfully.');
    }
}
