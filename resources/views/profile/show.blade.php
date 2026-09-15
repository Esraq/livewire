@extends('layouts.master')

@section('title', 'Profile')

@section('content')
<div class="container-fluid">

    <div class="card shadow-sm">

        {{-- Header: Name + Designation --}}
        <div class="card-header bg-white d-flex align-items-baseline"
             style="border-bottom: 2px solid var(--university-green);">
            <h4 class="mb-0 mr-2">{{ $user->name ?? 'Not set' }}</h4>
            <span class="text-muted">{{ $user->designation ?? '' }}</span>
        </div>

        <div class="card-body p-0">
            <table class="table table-borderless mb-0" style="table-layout: fixed;">
                <tbody>
                    <tr style="background-color: var(--university-light-green);">
                        <td class="text-right font-weight-bold" style="width: 25%; border-right: 1px solid #d5e6da;">Name :</td>
                        <td>{{ $user->name ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="text-right font-weight-bold" style="border-right: 1px solid #d5e6da;">Designation</td>
                        <td>{{ $user->designation ?? '-' }}</td>
                    </tr>
                    <tr style="background-color: var(--university-light-green);">
                        <td class="text-right font-weight-bold" style="border-right: 1px solid #d5e6da;">Department</td>
                        <td>{{ $user->department ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="text-right font-weight-bold" style="border-right: 1px solid #d5e6da;">Faculty</td>
                        <td>{{ $user->faculty ?? '-' }}</td>
                    </tr>
                    <tr style="background-color: var(--university-light-green);">
                        <td class="text-right font-weight-bold" style="border-right: 1px solid #d5e6da;">Personal Webpage</td>
                        <td>
                            @if (!empty($user->personal_webpage))
                                <a href="{{ $user->personal_webpage }}" target="_blank" rel="noopener">{{ $user->personal_webpage }}</a>
                            @else
                                -
                            @endif
                        </td>
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
                        <td class="text-right font-weight-bold" style="border-right: 1px solid #d5e6da;">Phone</td>
                        <td>{{ $user->phone ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="text-right font-weight-bold" style="border-right: 1px solid #d5e6da;">Cell-Phone</td>
                        <td>{{ $user->cell_phone ?? '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection
