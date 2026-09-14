@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">

    <div class="row mb-3">
        <div class="col-12">
            <h3>Manage Awards</h3>
        </div>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add / Edit Form (same form, toggles based on $editAward) --}}
    <div class="card mb-4">
        <div class="card-header">
            {{ isset($editAward) ? 'Edit Award' : 'Add Award' }}
        </div>
        <div class="card-body">
            <form action="{{ isset($editAward) ? route('awards.update', $editAward->id) : route('awards.store') }}"
                  method="POST">
                @csrf
                @if(isset($editAward))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="serial_no">Serial No</label>
                        <input type="number" name="serial_no" id="serial_no"
                               class="form-control @error('serial_no') is-invalid @enderror"
                               value="{{ old('serial_no', $editAward->serial_no ?? '') }}" required>
                        @error('serial_no')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="award_name">Award Name</label>
                        <input type="text" name="award_name" id="award_name"
                               class="form-control @error('award_name') is-invalid @enderror"
                               value="{{ old('award_name', $editAward->award_name ?? '') }}" required>
                        @error('award_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($editAward) ? 'Update' : 'Save' }}
                </button>

                @if(isset($editAward))
                    <a href="{{ route('awards.index') }}" class="btn btn-secondary">Cancel</a>
                @endif
            </form>
        </div>
    </div>

    {{-- Listing Table --}}
    <div class="card">
        <div class="card-header">
            Award List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Serial No</th>
                        <th>Award Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($awards as $award)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $award->serial_no }}</td>
                            <td>{{ $award->award_name }}</td>
                            <td>
                                <a href="{{ route('awards.edit', $award->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('awards.destroy', $award->id) }}" method="POST" style="display:inline-block;">
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

            {{ $awards->links() }}
        </div>
    </div>

</div>
@endsection