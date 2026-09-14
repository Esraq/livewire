<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Award;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awards = Award::latest()->paginate(5);

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'serial_no'  => 'required|integer',
            'award_name' => 'required|string|max:255',
        ]);

        Award::create($validated);

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
        $award = Award::findOrFail($id);

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
        $editAward = Award::findOrFail($id);
        $awards = Award::latest()->paginate(5);

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
        $validated = $request->validate([
            'serial_no'  => 'required|integer',
            'award_name' => 'required|string|max:255',
        ]);

        $award = Award::findOrFail($id);
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
        $award = Award::findOrFail($id);
        $award->delete();

        return redirect()->route('awards.index')
                        ->with('success', 'Award deleted successfully.');
    }
}