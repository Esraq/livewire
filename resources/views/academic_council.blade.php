@extends('layouts.app')

@section('title', 'Academic Council | Khwaja Yunus Ali University')

@section('content')

<style>

    .academic-section {
        padding: 40px 0;
        background: #fff;
    }

    .academic-title {
        text-align: center;
        font-size: 18px;
        font-weight: 600;
        color: #222;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .academic-line {
        height: 1px;
        background: #e8552e;
        width: 100%;
        margin-bottom: 15px;
    }

    .academic-table-wrapper {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .academic-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
        background: #fff;
    }

    .academic-table th {
        background: #fff;
        border: 1px solid #d8d8d8;
        padding: 10px;
        text-align: left;
        font-weight: 600;
        vertical-align: middle;
    }

    .academic-table td {
        border: 1px solid #d8d8d8;
        padding: 10px;
        color: #333;
        vertical-align: middle;
    }

    .academic-table tbody tr:nth-child(odd) {
        background: #f2f2f2;
    }

    .academic-table tbody tr:nth-child(even) {
        background: #fff;
    }

    .academic-table tbody tr:hover {
        background: #eef8f3;
    }

    .academic-photo {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
    }

    .academic-name {
        font-weight: 600;
    }

    .no-data {
        text-align: center;
        padding: 30px !important;
        color: #777;
    }

    @media (max-width: 768px) {

        .academic-section {
            padding: 30px 10px;
        }

        .academic-table {
            min-width: 700px;
        }

        .academic-table th,
        .academic-table td {
            padding: 8px;
        }

        .academic-photo {
            width: 55px;
            height: 55px;
        }
    }

</style>


<section class="academic-section">

    <div class="container">

        <h1 class="academic-title">
            Academic Council
        </h1>

        <div class="academic-line"></div>

        <div class="academic-table-wrapper">

            <table class="academic-table">

                <thead>

                    <tr>

                        <th style="width: 7%;">
                            SL
                        </th>

                        <th style="width: 15%;">
                            Photo
                        </th>

                        <th>
                            Name
                        </th>

                        <th style="width: 30%;">
                            Position
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($academicCouncils as $member)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>

                                <img
                                    src="{{ $member->image_url }}"
                                    alt="{{ $member->name }}"
                                    class="academic-photo"
                                >

                            </td>

                            <td class="academic-name">
                                {{ $member->name }}
                            </td>

                            <td>
                                {{ $member->position }}
                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="4" class="no-data">
                                No Academic Council information found.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</section>

@endsection