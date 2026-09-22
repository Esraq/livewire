@extends('layouts.app')

@section('content')

<div class="container notice-container">

    <div class="notice-box">

        <h3 class="notice-heading">Latest Notices</h3>

        <div class="table-responsive">

            <table class="notice-table">

                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Title</th>
                        <th>PDF</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($notices as $notice)

                        <tr>

                            <td>
                                {{ $notice->date->format('d M Y') }}
                            </td>

                            <td>
                                {{ $notice->title }}
                            </td>

                            <td>

                                @if(!empty($notice->file_name))

                                    <a href="{{ asset('storage/' . $notice->file_name) }}"
                                       target="_blank"
                                       class="pdf-link">
                                        View PDF
                                    </a>

                                @else

                                    <span>No PDF</span>

                                @endif

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="3" class="text-center">
                                No notices found.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

<style>

    .notice-container {
        padding: 50px 20px;
        display: flex;
        justify-content: center;
    }

    .notice-box {
        width: 100%;
        max-width: 950px;
        margin: 0 auto;
        padding: 25px;
        border: 1px solid #dcdcdc;
        border-radius: 8px;
        background: #ffffff;
    }

    .notice-heading {
        text-align: center;
        margin-bottom: 25px;
        font-weight: 700;
    }

    .notice-table {
        width: 100%;
        border-collapse: collapse;
        margin: 0 auto;
    }

    .notice-table th,
    .notice-table td {
        border: 1px solid #cfcfcf;
        padding: 15px 20px;
        vertical-align: middle;
    }

    .notice-table th {
        text-align: center;
        font-weight: 700;
        background-color: #f5f5f5;
    }

    .notice-table td:first-child {
        text-align: center;
        width: 180px;
    }

    .notice-table td:nth-child(2) {
        text-align: left;
    }

    .notice-table td:last-child {
        text-align: center;
        width: 150px;
    }

    .pdf-link {
        font-weight: 600;
        text-decoration: none;
    }

    .pdf-link:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {

        .notice-container {
            padding: 25px 10px;
        }

        .notice-box {
            padding: 15px;
        }

        .notice-table th,
        .notice-table td {
            padding: 10px;
        }

    }

</style>

@endsection