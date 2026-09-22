<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    /**
     * Rules shared by store() and update().
     */
    private function rules(): array
    {
        return [
            'serial_no'        => 'required|integer',
            'publication_name' => 'required|string|max:1000',
            'doi'              => 'nullable|string|max:255',
        ];
    }

    /**
     * Query limited to the logged-in user's publications (faculty_id = users.id).
     */
    private function ownPublications()
    {
        return Publication::where('faculty_id', Auth::id());
    }

    /**
     * Display only the logged-in user's publications.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = $this->ownPublications()->latest()->paginate(5);

        return view('faculty.publication', compact('publications'))
                    ->with('i', (request()->input('page', 1) - 1) * 5)
                    ->with('editPublication', null);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty.publication');
    }

    /**
     * Store a publication for the logged-in user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $publication = new Publication($validated);
        // faculty_id is the logged-in user's id, never taken from the form
        $publication->faculty_id = Auth::id();
        $publication->save();

        return redirect()
            ->route('publications.index')
            ->with('success', 'Publication added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = $this->ownPublications()->findOrFail($id);

        return view('faculty.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 404 if the record belongs to someone else
        $editPublication = $this->ownPublications()->findOrFail($id);

        $publications = $this->ownPublications()->latest()->paginate(5);

        return view(
            'faculty.publication',
            compact('publications', 'editPublication')
        )->with(
            'i',
            (request()->input('page', 1) - 1) * 5
        );
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
        $validated = $request->validate($this->rules());

        $publication = $this->ownPublications()->findOrFail($id);

        $publication->update($validated);

        return redirect()
            ->route('publications.index')
            ->with('success', 'Publication updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publication = $this->ownPublications()->findOrFail($id);

        $publication->delete();

        return redirect()
            ->route('publications.index')
            ->with('success', 'Publication deleted successfully.');
    }
}