<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AwardController extends Controller
{
    /**
     * Rules shared by store() and update().
     */
    private function rules(): array
    {
        return [
            'serial_no'  => 'required|integer',
            'award_name' => 'required|string|max:255',
        ];
    }

    /**
     * Query limited to the logged-in user's awards (faculty_id = users.id).
     */
    private function ownAwards()
    {
        return Award::where('faculty_id', Auth::id());
    }

    /**
     * Display only the logged-in user's awards.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awards = $this->ownAwards()->latest()->paginate(5);

        return view('faculty.award', compact('awards'))
                    ->with('i', (request()->input('page', 1) - 1) * 5)
                    ->with('editAward', null);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty.award');
    }

    /**
     * Store an award for the logged-in user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $award = new Award($validated);
        // faculty_id is the logged-in user's id, never taken from the form
        $award->faculty_id = Auth::id();
        $award->save();

        return redirect()->route('awards.index')
                        ->with('success', 'Award added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $award = $this->ownAwards()->findOrFail($id);

        return view('faculty.show', compact('award'));
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
        $editAward = $this->ownAwards()->findOrFail($id);
        $awards    = $this->ownAwards()->latest()->paginate(5);

        return view('faculty.award', compact('awards', 'editAward'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
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

        $award = $this->ownAwards()->findOrFail($id);
        $award->update($validated);

        return redirect()->route('awards.index')
                        ->with('success', 'Award updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $award = $this->ownAwards()->findOrFail($id);
        $award->delete();

        return redirect()->route('awards.index')
                        ->with('success', 'Award deleted successfully.');
    }
}