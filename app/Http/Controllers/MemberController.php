<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Query limited to the logged-in user's memberships (faculty_id = users.id).
     */
    private function ownMembers()
    {
        return Member::where('faculty_id', Auth::id());
    }

    /**
     * Display only the logged-in user's memberships (single page with CRUD UI).
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = $this->ownMembers()->orderBy('serial_no')->paginate(10);

        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Not used - creation is handled via modal on the index page.
    }

    /**
     * Store a membership for the logged-in user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'serial_no'       => 'required|integer|unique:members,serial_no',
            'membership_body' => 'required|string|max:255',
        ]);

        $member = new Member($validated);
        // faculty_id is the logged-in user's id, never taken from the form
        $member->faculty_id = Auth::id();
        $member->save();

        return redirect()
            ->route('members.index')
            ->with('success', 'Member added successfully.');
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
     * Renders the same index view, with $editMember set so the
     * shared form pre-fills and switches into "Edit" mode.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 404 if the record belongs to someone else
        $editMember = $this->ownMembers()->findOrFail($id);
        $members    = $this->ownMembers()->orderBy('serial_no')->paginate(10);

        return view('members.index', compact('members', 'editMember'));
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
        $member = $this->ownMembers()->findOrFail($id);

        $validated = $request->validate([
            'serial_no'       => 'required|integer|unique:members,serial_no,' . $member->id,
            'membership_body' => 'required|string|max:255',
        ]);

        $member->update($validated);

        return redirect()
            ->route('members.index')
            ->with('success', 'Member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = $this->ownMembers()->findOrFail($id);
        $member->delete();

        return redirect()
            ->route('members.index')
            ->with('success', 'Member deleted successfully.');
    }
}
