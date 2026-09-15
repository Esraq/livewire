@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">

    <div class="row mb-3">
        <div class="col-12">
            <h3>Manage Experience</h3>
        </div>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add / Edit Form (same form, toggles based on $editExperience) --}}
    <div class="card mb-4">
        <div class="card-header">
            {{ isset($editExperience) ? 'Edit Experience' : 'Add Experience' }}
        </div>
        <div class="card-body">
            <form action="{{ isset($editExperience) ? route('experiences.update', $editExperience->id) : route('experiences.store') }}"
                  method="POST">
                @csrf
                @if(isset($editExperience))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="serial_no">Serial No</label>
                        <input type="number" name="serial_no" id="serial_no"
                               class="form-control @error('serial_no') is-invalid @enderror"
                               value="{{ old('serial_no', $editExperience->serial_no ?? '') }}" required>
                        @error('serial_no')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="institution_name">Institution Name</label>
                        <input type="text" name="institution_name" id="institution_name"
                               class="form-control @error('institution_name') is-invalid @enderror"
                               value="{{ old('institution_name', $editExperience->institution_name ?? '') }}" required>
                        @error('institution_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="position">Position</label>
                        <input type="text" name="position" id="position"
                               class="form-control @error('position') is-invalid @enderror"
                               value="{{ old('position', $editExperience->position ?? '') }}" required>
                        @error('position')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date"
                               class="form-control @error('start_date') is-invalid @enderror"
                               value="{{ old('start_date', isset($editExperience) ? $editExperience->start_date->format('Y-m-d') : '') }}" required>
                        @error('start_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date"
                               class="form-control @error('end_date') is-invalid @enderror"
                               value="{{ old('end_date', isset($editExperience) && $editExperience->end_date ? $editExperience->end_date->format('Y-m-d') : '') }}">
                        @error('end_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <small class="text-muted">Leave blank if currently ongoing</small>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($editExperience) ? 'Update' : 'Save' }}
                </button>

                @if(isset($editExperience))
                    <a href="{{ route('experiences.index') }}" class="btn btn-secondary">Cancel</a>
                @endif
            </form>
        </div>
    </div>

    {{-- Listing Table --}}
    <div class="card">
        <div class="card-header">
            Experience List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Serial No</th>
                        <th>Institution Name</th>
                        <th>Position</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($experiences as $experience)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $experience->serial_no }}</td>
                            <td>{{ $experience->institution_name }}</td>
                            <td>{{ $experience->position }}</td>
                            <td>{{ $experience->start_date->format('d M Y') }}</td>
                            <td>{{ $experience->end_date ? $experience->end_date->format('d M Y') : 'Present' }}</td>
                            <td>
                                <a href="{{ route('experiences.edit', $experience->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $experiences->links() }}
        </div>
    </div>

</div>
@endsection
