@extends('layouts.admin')

@section('title', 'Convocations')

@section('content')

<div class="container-fluid">

    <!-- PAGE HEADER -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Convocations</h1>

        <button type="button" class="btn btn-primary" id="createBtn">
            <i class="fas fa-plus fa-sm"></i> Add Convocation
        </button>
    </div>

    <!-- FLASH MESSAGE -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <!-- LIST -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Convocation List</h6>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-items-center mb-0">
                <thead>
                    <tr>
                        <th style="width:60px">#</th>
                        <th style="width:140px">Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th style="width:140px" class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                @forelse ($convocations as $convocation)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <img src="{{ $convocation->image_url }}" alt="{{ $convocation->title }}"
                                 class="rounded" style="width:120px;height:60px;object-fit:cover;">
                        </td>

                        <td>{{ $convocation->title }}</td>

                        <td>{{ \Illuminate\Support\Str::limit($convocation->description, 80) }}</td>

                        <td class="text-center">

                            <button type="button"
                                    class="btn btn-sm btn-primary edit-btn"
                                    data-action="{{ route('convocations.update', $convocation) }}"
                                    data-id="{{ $convocation->id }}"
                                    data-title="{{ $convocation->title }}"
                                    data-description="{{ $convocation->description }}"
                                    data-image="{{ $convocation->image_url }}">
                                <i class="fas fa-edit"></i>
                            </button>

                            <form action="{{ route('convocations.destroy', $convocation) }}" method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Delete this convocation?');">
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
                        <td colspan="5" class="text-center text-muted py-4">No convocations found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


<!-- CREATE / EDIT MODAL (one modal for both) -->
<div class="modal fade" id="convocationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <form id="convocationForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT" id="methodField" disabled>
                <input type="hidden" name="_mode" id="modeField" value="{{ old('_mode', 'create') }}">
                <input type="hidden" name="_edit_id" id="editIdField" value="{{ old('_edit_id') }}">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Convocation</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title') }}">
                        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <!-- IMAGE -->
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" accept="image/*"
                               class="form-control-file @error('image') is-invalid @enderror">
                        @error('image') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                        <small class="form-text text-muted" id="imageHelp">JPG, PNG or WEBP, max 2 MB.</small>

                        <img id="imagePreview" src="" alt="Preview"
                             class="img-thumbnail mt-2 d-none" style="max-height:160px;">
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="4"
                                  class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
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

    var storeUrl  = "{{ route('convocations.store') }}";
    var updateUrl = "{{ route('convocations.update', '__ID__') }}";

    var $modal   = $('#convocationModal');
    var $form    = $('#convocationForm');
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
        $('#modalTitle').text('Add Convocation');
        $('#submitBtn').text('Save');
        $('#imageHelp').text('JPG, PNG or WEBP, max 2 MB.');
        showPreview(null);
        $modal.modal('show');
    }

    // ---------- EDIT ----------
    function openEdit(id, action) {
        $form.attr('action', action || updateUrl.replace('__ID__', id));
        $('#methodField').prop('disabled', false);
        $('#modeField').val('edit');
        $('#editIdField').val(id);
        $('#modalTitle').text('Edit Convocation');
        $('#submitBtn').text('Update');
        $('#imageHelp').text('Leave empty to keep the current image.');
    }

    $('#createBtn').on('click', openCreate);

    $('.edit-btn').on('click', function () {
        var $b = $(this);
        resetErrors();
        $form[0].reset();
        openEdit($b.data('id'), $b.data('action'));
        $('#title').val($b.data('title'));
        $('#description').val($b.data('description'));
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
        @else
            $form.attr('action', storeUrl);
            $('#modalTitle').text('Add Convocation');
        @endif
        $modal.modal('show');
    @endif

});
</script>
@endsection
