@extends('layouts.admin')

@section('title', 'Users')

@section('content')

<div class="container-fluid">

    <!-- PAGE HEADER -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>

        <button type="button" class="btn btn-primary" id="createBtn">
            <i class="fas fa-plus fa-sm"></i> Add User
        </button>
    </div>

    <!-- FLASH MESSAGES -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <!-- LIST -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-items-center mb-0">
                <thead>
                    <tr>
                        <th style="width:60px">#</th>
                        <th style="width:90px">Image</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Department</th>
                        <th style="width:110px">Role</th>
                        <th style="width:140px" class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            @if ($user->image_url)
                                <img src="{{ $user->image_url }}" alt="{{ $user->name }}"
                                     class="rounded-circle" style="width:50px;height:50px;object-fit:cover;">
                            @else
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center text-gray-400"
                                     style="width:50px;height:50px;">
                                    <i class="fas fa-user"></i>
                                </div>
                            @endif
                        </td>

                        <td>{{ $user->name }}</td>

                        <td>{{ $user->position ?: '—' }}</td>

                        <td>{{ $user->email }}</td>

                        <td>{{ $user->mobile_no ?: '—' }}</td>

                        <td>{{ $user->department->name ?? '—' }}</td>

                        <td>
                            @if ($user->is_admin)
                                <span class="badge badge-success">Admin</span>
                            @else
                                <span class="badge badge-secondary">User</span>
                            @endif
                        </td>

                        <td class="text-center">

                            <button type="button"
                                    class="btn btn-sm btn-primary edit-btn"
                                    data-action="{{ route('users.update', $user) }}"
                                    data-id="{{ $user->id }}"
                                    data-name="{{ $user->name }}"
                                    data-position="{{ $user->position }}"
                                    data-email="{{ $user->email }}"
                                    data-mobile="{{ $user->mobile_no }}"
                                    data-department="{{ $user->department_id }}"
                                    data-admin="{{ $user->is_admin ? 1 : 0 }}"
                                    data-image="{{ $user->image_url }}">
                                <i class="fas fa-edit"></i>
                            </button>

                            <form action="{{ route('users.destroy', $user) }}" method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center text-muted py-4">No users found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


<!-- CREATE / EDIT MODAL (one modal for both) -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <form id="userForm" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <input type="hidden" name="_method" value="PUT" id="methodField" disabled>
                <input type="hidden" name="_mode" id="modeField" value="{{ old('_mode', 'create') }}">
                <input type="hidden" name="_edit_id" id="editIdField" value="{{ old('_edit_id') }}">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}">
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="position">Position</label>
                            <input type="text" name="position" id="position"
                                   class="form-control @error('position') is-invalid @enderror"
                                   value="{{ old('position') }}" placeholder="e.g. Lecturer, Professor">
                            @error('position') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}">
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="mobile_no">Mobile No</label>
                            <input type="text" name="mobile_no" id="mobile_no"
                                   class="form-control @error('mobile_no') is-invalid @enderror"
                                   value="{{ old('mobile_no') }}" placeholder="+8801XXXXXXXXX">
                            @error('mobile_no') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="department_id">Department</label>
                            <select name="department_id" id="department_id"
                                    class="form-control @error('department_id') is-invalid @enderror">
                                <option value="">-- None --</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}"
                                        {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('department_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="is_admin">Role</label>
                            <select name="is_admin" id="is_admin"
                                    class="form-control @error('is_admin') is-invalid @enderror">
                                <option value="0" {{ old('is_admin', '0') == '0' ? 'selected' : '' }}>User</option>
                                <option value="1" {{ old('is_admin') == '1' ? 'selected' : '' }}>Admin</option>
                            </select>
                            @error('is_admin') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   autocomplete="new-password">
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            <small class="form-text text-muted" id="passwordHelp">Minimum 8 characters.</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="form-control" autocomplete="new-password">
                        </div>
                    </div>

                    <!-- IMAGE -->
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" accept="image/*"
                               class="form-control-file @error('image') is-invalid @enderror">
                        @error('image') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                        <small class="form-text text-muted" id="imageHelp">Optional. JPG, PNG or WEBP, max 2 MB.</small>

                        <img id="imagePreview" src="" alt="Preview"
                             class="img-thumbnail mt-2 d-none" style="max-height:160px;">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection


@section('scripts')
<script>
$(function () {

    var storeUrl  = "{{ route('users.store') }}";
    var updateUrl = "{{ route('users.update', '__ID__') }}";

    var $modal   = $('#userModal');
    var $form    = $('#userForm');
    var $preview = $('#imagePreview');

    function resetErrors() {
        $form.find('.is-invalid').removeClass('is-invalid');
        $form.find('.invalid-feedback, .text-danger.small').remove();
    }

    function showPreview(src) {
        if (src) { $preview.attr('src', src).removeClass('d-none'); }
        else     { $preview.attr('src', '').addClass('d-none'); }
    }

    // ---------- CREATE ----------
    function openCreate() {
        resetErrors();
        $form[0].reset();
        $form.attr('action', storeUrl);
        $('#methodField').prop('disabled', true);
        $('#modeField').val('create');
        $('#editIdField').val('');
        $('#department_id').val('');
        $('#is_admin').val('0');
        $('#modalTitle').text('Add User');
        $('#submitBtn').text('Save');
        $('#passwordHelp').text('Minimum 8 characters.');
        $('#imageHelp').text('Optional. JPG, PNG or WEBP, max 2 MB.');
        showPreview(null);
        $modal.modal('show');
    }

    // ---------- EDIT ----------
    function openEdit(id, action) {
        $form.attr('action', action || updateUrl.replace('__ID__', id));
        $('#methodField').prop('disabled', false);
        $('#modeField').val('edit');
        $('#editIdField').val(id);
        $('#modalTitle').text('Edit User');
        $('#submitBtn').text('Update');
        $('#passwordHelp').text('Leave empty to keep the current password.');
        $('#imageHelp').text('Leave empty to keep the current image.');
    }

    $('#createBtn').on('click', openCreate);

    $('.edit-btn').on('click', function () {
        var $b = $(this);
        resetErrors();
        $form[0].reset();
        openEdit($b.data('id'), $b.data('action'));
        $('#name').val($b.attr('data-name'));
        $('#position').val($b.attr('data-position'));
        $('#email').val($b.attr('data-email'));
        $('#mobile_no').val($b.attr('data-mobile'));
        $('#department_id').val($b.data('department') === '' ? '' : String($b.data('department')));
        $('#is_admin').val(String($b.data('admin')));
        showPreview($b.data('image'));
        $modal.modal('show');
    });

    // live preview of a newly chosen image
    $('#image').on('change', function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) { showPreview(e.target.result); };
            reader.readAsDataURL(this.files[0]);
        }
    });

    // ---------- re-open modal after a validation error ----------
    @if ($errors->any())
        @if (old('_mode') === 'edit')
            openEdit("{{ old('_edit_id') }}");
            $('#passwordHelp').text('Leave empty to keep the current password.');
        @else
            $form.attr('action', storeUrl);
            $('#modalTitle').text('Add User');
        @endif
        $modal.modal('show');
    @endif

});
</script>
@endsection
