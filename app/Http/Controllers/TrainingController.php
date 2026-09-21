<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    /**
     * Rules shared by store() and update().
     */
    private function rules(): array
    {
        return [
            'serial_no'     => 'required|integer',
            'training_name' => 'required|string|max:255',
        ];
    }

    /**
     * Query limited to the logged-in user's trainings (faculty_id = users.id).
     */
    private function ownTrainings()
    {
        return Train::where('faculty_id', Auth::id());
    }

    /**
     * Display only the logged-in user's trainings.
     */
    public function index()
    {
        $trainings = $this->ownTrainings()->latest()->paginate(5);

        return view('faculty.training', compact('trainings'))
                    ->with('i', (request()->input('page', 1) - 1) * 5)
                    ->with('editTraining', null);
    }

    public function create()
    {
        return view('faculty.training');
    }

    /**
     * Store a training for the logged-in user.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $training = new Train($validated);
        // faculty_id is the logged-in user's id, never taken from the form
        $training->faculty_id = Auth::id();
        $training->save();

        return redirect()->route('trainings.index')
                        ->with('success', 'Training added successfully.');
    }

    public function show($id)
    {
        $training = $this->ownTrainings()->findOrFail($id);

        return view('faculty.show', compact('training'));
    }

    public function edit($id)
    {
        // 404 if the record belongs to someone else
        $editTraining = $this->ownTrainings()->findOrFail($id);
        $trainings    = $this->ownTrainings()->latest()->paginate(5);

        return view('faculty.training', compact('trainings', 'editTraining'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate($this->rules());

        $training = $this->ownTrainings()->findOrFail($id);
        $training->update($validated);

        return redirect()->route('trainings.index')
                        ->with('success', 'Training updated successfully.');
    }

    public function destroy($id)
    {
        $training = $this->ownTrainings()->findOrFail($id);
        $training->delete();

        return redirect()->route('trainings.index')
                        ->with('success', 'Training deleted successfully.');
    }
}