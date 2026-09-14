@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">

    <div class="row mb-3">
        <div class="col-12">
            <h3>Manage Subjects</h3>
        </div>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add / Edit Form (same form, toggles based on $editSubject) --}}
    <div class="card mb-4">
        <div class="card-header">
            {{ isset($editSubject) ? 'Edit Subject' : 'Add Subject' }}
        </div>
        <div class="card-body">
            <form action="{{ isset($editSubject) ? route('subjects.update', $editSubject->id) : route('subjects.store') }}"
                  method="POST">
                @csrf
                @if(isset($editSubject))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="serial_no">Serial No</label>
                        <input type="number" name="serial_no" id="serial_no"
                               class="form-control @error('serial_no') is-invalid @enderror"
                               value="{{ old('serial_no', $editSubject->serial_no ?? '') }}" required>
                        @error('serial_no')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="subject_name">Subject Name</label>
                        <input type="text" name="subject_name" id="subject_name"
                               class="form-control @error('subject_name') is-invalid @enderror"
                               value="{{ old('subject_name', $editSubject->subject_name ?? '') }}" required>
                        @error('subject_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($editSubject) ? 'Update' : 'Save' }}
                </button>

                @if(isset($editSubject))
                    <a href="{{ route('subjects.index') }}" class="btn btn-secondary">Cancel</a>
                @endif
            </form>
        </div>
    </div>

    {{-- Listing Table --}}
    <div class="card">
        <div class="card-header">
            Subject List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Serial No</th>
                        <th>Subject Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($subjects as $subject)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $subject->serial_no }}</td>
                            <td>{{ $subject->subject_name }}</td>
                            <td>
                                <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display:inline-block;">
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

            {{ $subjects->links() }}
        </div>
    </div>

</div>
@endsection