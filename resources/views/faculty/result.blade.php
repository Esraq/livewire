@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">

    <div class="row mb-3">
        <div class="col-12">
            <h3>Manage Degrees</h3>
        </div>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add / Edit Form (same form, toggles based on $editDegree) --}}
    <div class="card mb-4">
        <div class="card-header">
            {{ isset($editDegree) ? 'Edit Degree' : 'Add Degree' }}
        </div>
        <div class="card-body">
            <form action="{{ isset($editDegree) ? route('results.update', $editDegree->id) : route('results.store') }}"
                  method="POST">
                @csrf
                @if(isset($editDegree))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="degree_name">Degree Name</label>
                        <input type="text" name="degree_name" id="degree_name"
                               class="form-control @error('degree_name') is-invalid @enderror"
                               value="{{ old('degree_name', $editDegree->degree_name ?? '') }}" required>
                        @error('degree_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="institution">Institution</label>
                        <input type="text" name="institution" id="institution"
                               class="form-control @error('institution') is-invalid @enderror"
                               value="{{ old('institution', $editDegree->institution ?? '') }}" required>
                        @error('institution')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="board">Board</label>
                        <input type="text" name="board" id="board"
                               class="form-control @error('board') is-invalid @enderror"
                               value="{{ old('board', $editDegree->board ?? '') }}" required>
                        @error('board')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="year">Year</label>
                        <input type="text" name="year" id="year"
                               class="form-control @error('year') is-invalid @enderror"
                               value="{{ old('year', $editDegree->year ?? '') }}" required>
                        @error('year')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($editDegree) ? 'Update' : 'Save' }}
                </button>

                @if(isset($editDegree))
                    <a href="{{ route('results.index') }}" class="btn btn-secondary">Cancel</a>
                @endif
            </form>
        </div>
    </div>

    {{-- Listing Table --}}
    <div class="card">
        <div class="card-header">
            Degree List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Degree Name</th>
                        <th>Institution</th>
                        <th>Board</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($degrees as $degree)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $degree->degree_name }}</td>
                            <td>{{ $degree->institution }}</td>
                            <td>{{ $degree->board }}</td>
                            <td>{{ $degree->year }}</td>
                            <td>
                                <a href="{{ route('results.edit', $degree->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('results.destroy', $degree->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $degrees->links() }}
        </div>
    </div>

</div>
@endsection