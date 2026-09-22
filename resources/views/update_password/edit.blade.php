@extends('layouts.master')

@section('title', 'Update Password')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Password</h1>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-6">

            <div class="card shadow-sm mb-4">
                <div class="card-header" style="border-bottom: 2px solid var(--university-green, #08783f);">
                    <h6 class="m-0 font-weight-bold" style="color: var(--university-green, #08783f);">
                        Update Your Password
                    </h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update-password.update') }}" autocomplete="off">
                        @csrf
                        @method('PUT')

                        <!-- CURRENT PASSWORD -->
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <div class="input-group">
                                <input type="password" name="current_password" id="current_password"
                                       class="form-control @error('current_password') is-invalid @enderror"
                                       autocomplete="current-password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary toggle-pass"
                                            data-target="#current_password" tabindex="-1">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                @error('current_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- NEW PASSWORD -->
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       autocomplete="new-password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary toggle-pass"
                                            data-target="#password" tabindex="-1">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <small class="form-text text-muted">
                                At least 8 characters, with letters and numbers.
                            </small>
                        </div>

                        <!-- CONFIRM PASSWORD -->
                        <div class="form-group">
                            <label for="password_confirmation">Confirm New Password</label>
                            <div class="input-group">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                       class="form-control" autocomplete="new-password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary toggle-pass"
                                            data-target="#password_confirmation" tabindex="-1">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-key fa-sm"></i> Update Password
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection


@section('scripts')
<script>
$(function () {
    $('.toggle-pass').on('click', function () {
        var $input = $($(this).data('target'));
        var $icon  = $(this).find('i');
        var show   = $input.attr('type') === 'password';

        $input.attr('type', show ? 'text' : 'password');
        $icon.toggleClass('fa-eye', !show).toggleClass('fa-eye-slash', show);
    });
});
</script>
@endsection
