@extends('layouts.master')

@section('title', 'Profile')

@section('content')
<div class="container-fluid">

    {{-- Flash / error messages --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="card shadow-sm">

        {{-- Header: Image + Name + Position --}}
        <div class="card-header bg-white d-flex align-items-center"
             style="border-bottom: 2px solid var(--university-green);">

            <img src="{{ $user->image ? asset($user->image) : asset('admin/img/boy.png') }}"
                 alt="{{ $user->name }}"
                 class="rounded-circle mr-3"
                 style="width:64px;height:64px;object-fit:cover;">

            <div>
                <h4 class="mb-0">{{ $user->name ?? 'Not set' }}</h4>
                <span class="text-muted">{{ $user->position ?? '' }}</span>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table table-borderless mb-0" style="table-layout: fixed;">
                <tbody>
                    <tr style="background-color: var(--university-light-green);">
                        <td class="text-right font-weight-bold" style="width: 25%; border-right: 1px solid #d5e6da;">Name :</td>
                        <td>{{ $user->name ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="text-right font-weight-bold" style="border-right: 1px solid #d5e6da;">Position</td>
                        <td>{{ $user->position ?: '-' }}</td>
                    </tr>
                    <tr style="background-color: var(--university-light-green);">
                        <td class="text-right font-weight-bold" style="border-right: 1px solid #d5e6da;">Department</td>
                        <td>{{ $user->department->name ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="text-right font-weight-bold" style="border-right: 1px solid #d5e6da;">E-mail</td>
                        <td>
                            @if (!empty($user->email))
                                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    <tr style="background-color: var(--university-light-green);">
                        <td class="text-right font-weight-bold" style="border-right: 1px solid #d5e6da;">Mobile No</td>
                        <td>
                            @if (!empty($user->mobile_no))
                                <a href="tel:{{ preg_replace('/[^0-9+]/', '', $user->mobile_no) }}">{{ $user->mobile_no }}</a>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection