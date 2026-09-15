@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Members</h4>
        <button type="button" class="btn btn-primary" onclick="openCreateModal()">
            <i class="fa fa-plus"></i> Add New
        </button>
    </div>

    {{-- Success / Error Alerts --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Listing Table --}}
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle" id="memberTable">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th style="width: 150px;">Serial No</th>
                            <th>Membership Body</th>
                            <th style="width: 160px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($members as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->serial_no }}</td>
                                <td>{{ $item->membership_body }}</td>
                                <td class="text-center">
                                    {{-- Edit Button --}}
                                    <button type="button" class="btn btn-sm btn-warning"
                                        onclick="openEditModal({{ $item->id }}, {{ $item->serial_no }}, '{{ addslashes($item->membership_body) }}')">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>

                                    {{-- Delete Button --}}
                                    <button type="button" class="btn btn-sm btn-danger"
                                        onclick="confirmDelete({{ $item->id }})">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>

                                    <form id="delete-form-{{ $item->id }}"
                                        action="{{ route('members.destroy', $item->id) }}" method="POST"
                                        class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination (if using paginate() in controller) --}}
            @if (method_exists($members, 'links'))
                <div class="mt-3">
                    {{ $members->links() }}
                </div>
            @endif
        </div>
    </div>
</div>

{{-- Backdrop (shown/hidden manually via JS, no bootstrap.Modal JS object needed) --}}
<div id="memberModalBackdrop" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.5); z-index:1040;"
     onclick="closeMemberModal()"></div>

{{-- Create / Edit Modal (shown/hidden manually via JS) --}}
<div id="memberModal" class="modal" tabindex="-1" aria-hidden="true"
     style="display:none; position:fixed; inset:0; z-index:1050; overflow:auto;">
    <div class="modal-dialog" style="margin-top:5vh;">
        <div class="modal-content">
            <form id="memberForm" method="POST">
                @csrf
                <div id="methodField"></div>

                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Member</h5>
                    <button type="button" class="btn-close" onclick="closeMemberModal()"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="serial_no" class="form-label">Serial No</label>
                        <input type="number" name="serial_no" id="serial_no" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="membership_body" class="form-label">Membership Body</label>
                        <input type="text" name="membership_body" id="membership_body" class="form-control" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeMemberModal()">Close</button>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const storeUrl = "{{ route('members.store') }}";
    // Update route expects the ID appended, e.g. /members/{id}
    const updateUrlBase = "{{ url('members') }}";

    function showMemberModal() {
        document.getElementById('memberModal').style.display = 'block';
        document.getElementById('memberModalBackdrop').style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeMemberModal() {
        document.getElementById('memberModal').style.display = 'none';
        document.getElementById('memberModalBackdrop').style.display = 'none';
        document.body.style.overflow = '';
    }

    function openCreateModal() {
        document.getElementById('modalTitle').innerText = 'Add Member';
        document.getElementById('memberForm').setAttribute('action', storeUrl);
        document.getElementById('methodField').innerHTML = '';
        document.getElementById('serial_no').value = '';
        document.getElementById('membership_body').value = '';
        document.getElementById('submitBtn').innerText = 'Save';
        showMemberModal();
    }

    function openEditModal(id, serialNo, membershipBody) {
        document.getElementById('modalTitle').innerText = 'Edit Member';
        document.getElementById('memberForm').setAttribute('action', updateUrlBase + '/' + id);
        document.getElementById('methodField').innerHTML = '<input type="hidden" name="_method" value="PUT">';
        document.getElementById('serial_no').value = serialNo;
        document.getElementById('membership_body').value = membershipBody;
        document.getElementById('submitBtn').innerText = 'Update';
        showMemberModal();
    }

    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this record?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>
@endsection