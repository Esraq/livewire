<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Result;


class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees = Result::latest()->paginate(5);

        return view('faculty.result', compact('degrees'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty.result');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'degree_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'board'       => 'required|string|max:255',
            'year'        => 'required|string|max:4',
        ]);

        Result::create($request->all());

        return redirect()->route('results.index')
                        ->with('success', 'Degree added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $degrees = Result::findOrFail($id);

        return view('results.show', compact('degrees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $editDegree = Result::findOrFail($id);
       $degrees = Result::latest()->paginate(5);

       return view('faculty.result', compact('degrees', 'editDegree'))
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
        $request->validate([
            'degree_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'board'       => 'required|string|max:255',
            'year'        => 'required|string|max:4',
        ]);

        $degree = Result::findOrFail($id);
        $degree->update($request->all());

        return redirect()->route('results.index')
                        ->with('success', 'Degree updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $degree = Result::findOrFail($id);
        $degree->delete();

        return redirect()->route('results.index')
                        ->with('success', 'Degree deleted successfully.');
    }
}