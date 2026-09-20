@extends('layouts.admin')

@section('title', 'Notices')

@section('content')

<div class="container-fluid">

    <!-- PAGE HEADER -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Notices</h1>

        <button type="button" class="btn btn-primary" id="createBtn">
            <i class="fas fa-plus fa-sm"></i> Add Notice
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
            <h6 class="m-0 font-weight-bold text-primary">Notice List</h6>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-items-center mb-0">
                <thead>
                    <tr>
                        <th style="width:60px">#</th>
                        <th style="width:140px">Image</th>
                        <th>Title</th>
                        <th style="width:130px">File</th>
                        <th style="width:130px">Date</th>
                        <th style="width:140px" class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                @forelse ($notices as $notice)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <img src="{{ $notice->image_url }}" alt="{{ $notice->title }}"
                                 class="rounded" style="width:120px;height:60px;object-fit:cover;">
                        </td>

                        <td>{{ $notice->title }}</td>

                        <td>
                            <a href="{{ $notice->file_url }}" target="_blank"
                               class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-file-download"></i> View
                            </a>
                        </td>

                        <td>{{ $notice->date->format('d M Y') }}</td>

                        <td class="text-center">

                            <button type="button"
                                    class="btn btn-sm btn-primary edit-btn"
                                    data-action="{{ route('notices.update', $notice) }}"
                                    data-id="{{ $notice->id }}"
                                    data-title="{{ $notice->title }}"
                                    data-date="{{ $notice->date->format('Y-m-d') }}"
                                    data-image="{{ $notice->image_url }}"
                                    data-file-url="{{ $notice->file_url }}"
                                    data-file-label="{{ basename($notice->file_name) }}">
                                <i class="fas fa-edit"></i>
                            </button>

                            <form action="{{ route('notices.destroy', $notice) }}" method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Delete this notice?');">
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
                        <td colspan="6" class="text-center text-muted py-4">No notices found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


<!-- =====================================================
     CREATE / EDIT MODAL (one modal for both)
     ===================================================== -->
<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <form id="noticeForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT" id="methodField" disabled>
                <input type="hidden" name="_mode" id="modeField" value="{{ old('_mode', 'create') }}">
                <input type="hidden" name="_edit_id" id="editIdField" value="{{ old('_edit_id') }}">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Notice</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title"
                                   class="form-control @error('title') is-invalid @enderror"
                                   value="{{ old('title') }}">
                            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date"
                                   class="form-control @error('date') is-invalid @enderror"
                                   value="{{ old('date', date('Y-m-d')) }}">
                            @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
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

                    <!-- FILE -->
                    <div class="form-group">
                        <label for="file_name">File</label>
                        <input type="file" name="file_name" id="file_name"
                               accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.jpg,.jpeg,.png"
                               class="form-control-file @error('file_name') is-invalid @enderror">
                        @error('file_name') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                        <small class="form-text text-muted" id="fileHelp">
                            PDF, Word, Excel, PowerPoint or image, max 5 MB.
                        </small>

                        <div id="currentFile" class="small mt-2"></div>
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

    var storeUrl  = "{{ route('notices.store') }}";
    var updateUrl = "{{ route('notices.update', '__ID__') }}";

    var $modal   = $('#noticeModal');
    var $form    = $('#noticeForm');
    var $preview = $('#imagePreview');
    var today    = "{{ date('Y-m-d') }}";

    function resetErrors() {
        $form.find('.is-invalid').removeClass('is-invalid');
        $form.find('.invalid-feedback, .text-danger.small').remove();
    }

    function showPreview(src) {
        if (src) { $preview.attr('src', src).removeClass('d-none'); }
        else     { $preview.attr('src', '').addClass('d-none'); }
    }

    function showCurrentFile(url, label) {
        var $box = $('#currentFile').empty();
        if (url) {
            $box.append('Current file: ')
                .append($('<a>', { href: url, target: '_blank', text: label }));
        }
    }

    // ---------- CREATE ----------
    function openCreate() {
        resetErrors();
        $form[0].reset();
        $form.attr('action', storeUrl);
        $('#methodField').prop('disabled', true);
        $('#modeField').val('create');
        $('#editIdField').val('');
        $('#date').val(today);
        $('#modalTitle').text('Add Notice');
        $('#submitBtn').text('Save');
        $('#imageHelp').text('JPG, PNG or WEBP, max 2 MB.');
        $('#fileHelp').text('PDF, Word, Excel, PowerPoint or image, max 5 MB.');
        showPreview(null);
        showCurrentFile(null);
        $modal.modal('show');
    }

    // ---------- EDIT ----------
    function openEdit(id, action) {
        $form.attr('action', action || updateUrl.replace('__ID__', id));
        $('#methodField').prop('disabled', false);
        $('#modeField').val('edit');
        $('#editIdField').val(id);
        $('#modalTitle').text('Edit Notice');
        $('#submitBtn').text('Update');
        $('#imageHelp').text('Leave empty to keep the current image.');
        $('#fileHelp').text('Leave empty to keep the current file.');
    }

    $('#createBtn').on('click', openCreate);

    $('.edit-btn').on('click', function () {
        var $b = $(this);
        resetErrors();
        $form[0].reset();
        openEdit($b.data('id'), $b.data('action'));
        $('#title').val($b.data('title'));
        $('#date').val($b.data('date'));
        showPreview($b.data('image'));
        showCurrentFile($b.data('file-url'), $b.data('file-label'));
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
            $('#modalTitle').text('Add Notice');
        @endif
        $modal.modal('show');
    @endif

});
</script>
@endsection
