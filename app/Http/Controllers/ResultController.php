<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    /**
     * Rules shared by store() and update().
     */
    private function rules(): array
    {
        return [
            'degree_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'board'       => 'required|string|max:255',
            'year'        => 'required|string|max:4',
        ];
    }

    /**
     * Display only the logged-in user's results.
     */
    public function index()
    {
        $degrees = Auth::user()->results()->latest()->paginate(5);

        return view('faculty.result', compact('degrees'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('faculty.result');
    }

    /**
     * Store a new result for the logged-in user.
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->rules());

        // user_id is set from the logged-in user, never from the request
        Auth::user()->results()->create($data);

        return redirect()->route('results.index')
                        ->with('success', 'Degree added successfully.');
    }

    public function show($id)
    {
        $degrees = Auth::user()->results()->findOrFail($id);

        return view('results.show', compact('degrees'));
    }

    public function edit($id)
    {
        // 404 if the record belongs to someone else
        $editDegree = Auth::user()->results()->findOrFail($id);
        $degrees    = Auth::user()->results()->latest()->paginate(5);

        return view('faculty.result', compact('degrees', 'editDegree'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate($this->rules());

        $degree = Auth::user()->results()->findOrFail($id);
        $degree->update($data);

        return redirect()->route('results.index')
                        ->with('success', 'Degree updated successfully.');
    }

    public function destroy($id)
    {
        $degree = Auth::user()->results()->findOrFail($id);
        $degree->delete();

        return redirect()->route('results.index')
                        ->with('success', 'Degree deleted successfully.');
    }
}
