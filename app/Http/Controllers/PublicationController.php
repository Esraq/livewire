<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Publication;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::latest()->paginate(5);

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'serial_no'        => 'required|integer',
            'publication_name' => 'required|string|max:1000',
        ]);

        Publication::create($validated);

        return redirect()->route('publications.index')
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
        $publication = Publication::findOrFail($id);

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
        $editPublication = Publication::findOrFail($id);
        $publications = Publication::latest()->paginate(5);

        return view('faculty.publication', compact('publications', 'editPublication'))
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
            'serial_no'        => 'required|integer',
            'publication_name' => 'required|string|max:1000',
        ]);

        $publication = Publication::findOrFail($id);
        $publication->update($validated);

        return redirect()->route('publications.index')
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
        $publication = Publication::findOrFail($id);
        $publication->delete();

        return redirect()->route('publications.index')
                        ->with('success', 'Publication deleted successfully.');
    }
}