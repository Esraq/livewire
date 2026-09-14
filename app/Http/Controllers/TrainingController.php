<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Train::latest()->paginate(5);

        return view('faculty.training', compact('trainings'))
                    ->with('i', (request()->input('page', 1) - 1) * 5)
                    ->with('editTraining', null);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty/training');
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
            'serial_no'     => 'required|integer',
            'training_name' => 'required|string|max:255',
        ]);

        Train::create($validated);

        return redirect()->route('trainings.index')
                        ->with('success', 'Training added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Train::findOrFail($id);

        return view('faculty.show', compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editTraining = Train::findOrFail($id);
        $trainings = Train::latest()->paginate(5);

        return view('faculty.training', compact('trainings', 'editTraining'))
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
            'serial_no'     => 'required|integer',
            'training_name' => 'required|string|max:255',
        ]);

        $training = Train::findOrFail($id);
        $training->update($validated);

        return redirect()->route('trainings.index')
                        ->with('success', 'Training updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = Train::findOrFail($id);
        $training->delete();

        return redirect()->route('trainings.index')
                        ->with('success', 'Training deleted successfully.');
    }
}