@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">

    <div class="row mb-3">
        <div class="col-12">
            <h3>Manage Research Interests</h3>
        </div>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add / Edit Form (same form, toggles based on $editResearch) --}}
    <div class="card mb-4">
        <div class="card-header">
            {{ isset($editResearch) ? 'Edit Research Interest' : 'Add Research Interest' }}
        </div>
        <div class="card-body">
            <form action="{{ isset($editResearch) ? route('researches.update', $editResearch->id) : route('researches.store') }}"
                  method="POST">
                @csrf
                @if(isset($editResearch))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="serial_no">Serial No</label>
                        <input type="number" name="serial_no" id="serial_no"
                               class="form-control @error('serial_no') is-invalid @enderror"
                               value="{{ old('serial_no', $editResearch->serial_no ?? '') }}" required>
                        @error('serial_no')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="research_interest">Research Interest</label>
                        <input type="text" name="research_interest" id="research_interest"
                               class="form-control @error('research_interest') is-invalid @enderror"
                               value="{{ old('research_interest', $editResearch->research_interest ?? '') }}" required>
                        @error('research_interest')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($editResearch) ? 'Update' : 'Save' }}
                </button>

                @if(isset($editResearch))
                    <a href="{{ route('researches.index') }}" class="btn btn-secondary">Cancel</a>
                @endif
            </form>
        </div>
    </div>

    {{-- Listing Table --}}
    <div class="card">
        <div class="card-header">
            Research Interest List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Serial No</th>
                        <th>Research Interest</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($researches as $research)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $research->serial_no }}</td>
                            <td>{{ $research->research_interest }}</td>
                            <td>
                                <a href="{{ route('researches.edit', $research->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('researches.destroy', $research->id) }}" method="POST" style="display:inline-block;">
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

            {{ $researches->links() }}
        </div>
    </div>

</div>
@endsection