<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teaching;

class TeachingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Teaching::latest()->paginate(5);

        return view('faculty.subject', compact('subjects'))
                    ->with('i', (request()->input('page', 1) - 1) * 5)
                    ->with('editSubject', null);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty.subject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'serial_no'    => 'required|integer',
            'subject_name' => 'required|string|max:255',
        ]);

        Teaching::create($validated);

        return redirect()->route('subjects.index')
                        ->with('success', 'Subject added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Teaching::findOrFail($id);

        return view('faculty.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editSubject = Teaching::findOrFail($id);
        $subjects = Teaching::latest()->paginate(5);

        return view('faculty.subject', compact('subjects', 'editSubject'))
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
        $validated = $request->validate([
            'serial_no'    => 'required|integer',
            'subject_name' => 'required|string|max:255',
        ]);

        $subject = Teaching::findOrFail($id);
        $subject->update($validated);

        return redirect()->route('subjects.index')
                        ->with('success', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Teaching::findOrFail($id);
        $subject->delete();

        return redirect()->route('subjects.index')
                        ->with('success', 'Subject deleted successfully.');
    }
}