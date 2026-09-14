<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Research;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researches = Research::latest()->paginate(5);

        return view('faculty.research', compact('researches'))
                    ->with('i', (request()->input('page', 1) - 1) * 5)
                    ->with('editResearch', null);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty.research');
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
            'serial_no'         => 'required|integer',
            'research_interest' => 'required|string|max:255',
        ]);

        Research::create($validated);

        return redirect()->route('researches.index')
                        ->with('success', 'Research interest added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $research = Research::findOrFail($id);

        return view('faculty.show', compact('research'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editResearch = Research::findOrFail($id);
        $researches = Research::latest()->paginate(5);

        return view('faculty.research', compact('researches', 'editResearch'))
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
            'serial_no'         => 'required|integer',
            'research_interest' => 'required|string|max:255',
        ]);

        $research = Research::findOrFail($id);
        $research->update($validated);

        return redirect()->route('researches.index')
                        ->with('success', 'Research interest updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $research = Research::findOrFail($id);
        $research->delete();

        return redirect()->route('researches.index')
                        ->with('success', 'Research interest deleted successfully.');
    }
}