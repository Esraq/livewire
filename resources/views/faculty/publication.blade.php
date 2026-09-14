@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">

    <div class="row mb-3">
        <div class="col-12">
            <h3>Manage Publications</h3>
        </div>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add / Edit Form (same form, toggles based on $editPublication) --}}
    <div class="card mb-4">
        <div class="card-header">
            {{ isset($editPublication) ? 'Edit Publication' : 'Add Publication' }}
        </div>
        <div class="card-body">
            <form action="{{ isset($editPublication) ? route('publications.update', $editPublication->id) : route('publications.store') }}"
                  method="POST">
                @csrf
                @if(isset($editPublication))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="serial_no">Serial No</label>
                        <input type="number" name="serial_no" id="serial_no"
                               class="form-control @error('serial_no') is-invalid @enderror"
                               value="{{ old('serial_no', $editPublication->serial_no ?? '') }}" required>
                        @error('serial_no')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="publication_name">Publication Name</label>
                        <input type="text" name="publication_name" id="publication_name"
                               class="form-control @error('publication_name') is-invalid @enderror"
                               value="{{ old('publication_name', $editPublication->publication_name ?? '') }}" required>
                        @error('publication_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($editPublication) ? 'Update' : 'Save' }}
                </button>

                @if(isset($editPublication))
                    <a href="{{ route('publications.index') }}" class="btn btn-secondary">Cancel</a>
                @endif
            </form>
        </div>
    </div>

    {{-- Listing Table --}}
    <div class="card">
        <div class="card-header">
            Publication List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Serial No</th>
                        <th>Publication Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($publications as $publication)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $publication->serial_no }}</td>
                            <td>{{ $publication->publication_name }}</td>
                            <td>
                                <a href="{{ route('publications.edit', $publication->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('publications.destroy', $publication->id) }}" method="POST" style="display:inline-block;">
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

            {{ $publications->links() }}
        </div>
    </div>

</div>
@endsection