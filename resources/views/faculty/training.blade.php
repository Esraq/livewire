@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">

    <div class="row mb-3">
        <div class="col-12">
            <h3>Manage Trainings</h3>
        </div>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add / Edit Form (same form, toggles based on $editTraining) --}}
    <div class="card mb-4">
        <div class="card-header">
            {{ isset($editTraining) ? 'Edit Training' : 'Add Training' }}
        </div>
        <div class="card-body">
            <form action="{{ isset($editTraining) ? route('trainings.update', $editTraining->id) : route('trainings.store') }}"
                  method="POST">
                @csrf
                @if(isset($editTraining))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="serial_no">Serial No</label>
                        <input type="number" name="serial_no" id="serial_no"
                               class="form-control @error('serial_no') is-invalid @enderror"
                               value="{{ old('serial_no', $editTraining->serial_no ?? '') }}" required>
                        @error('serial_no')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="training_name">Training Name</label>
                        <input type="text" name="training_name" id="training_name"
                               class="form-control @error('training_name') is-invalid @enderror"
                               value="{{ old('training_name', $editTraining->training_name ?? '') }}" required>
                        @error('training_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($editTraining) ? 'Update' : 'Save' }}
                </button>

                @if(isset($editTraining))
                    <a href="{{ route('trainings.index') }}" class="btn btn-secondary">Cancel</a>
                @endif
            </form>
        </div>
    </div>

    {{-- Listing Table --}}
    <div class="card">
        <div class="card-header">
            Training List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Serial No</th>
                        <th>Training Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($trainings as $training)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $training->serial_no }}</td>
                            <td>{{ $training->training_name }}</td>
                            <td>
                                <a href="{{ route('trainings.edit', $training->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('trainings.destroy', $training->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $trainings->links() }}
        </div>
    </div>

</div>
@endsection