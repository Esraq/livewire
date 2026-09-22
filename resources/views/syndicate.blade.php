@extends('layouts.app')

@section('title', 'Syndicate | Khwaja Yunus Ali University')

@section('content')

<style>

    .syndicate-section {
        padding: 40px 0;
        background: #fff;
    }

    .syndicate-title {
        text-align: center;
        font-size: 18px;
        font-weight: 600;
        color: #222;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .syndicate-line {
        height: 1px;
        background: #e8552e;
        width: 100%;
        margin-bottom: 15px;
    }

    .syndicate-table-wrapper {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .syndicate-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
        background: #fff;
    }

    .syndicate-table th {
        background: #fff;
        border: 1px solid #d8d8d8;
        padding: 10px;
        text-align: left;
        font-weight: 600;
        vertical-align: middle;
    }

    .syndicate-table td {
        border: 1px solid #d8d8d8;
        padding: 10px;
        color: #333;
        vertical-align: middle;
    }

    .syndicate-table tbody tr:nth-child(odd) {
        background: #f2f2f2;
    }

    .syndicate-table tbody tr:nth-child(even) {
        background: #fff;
    }

    .syndicate-table tbody tr:hover {
        background: #eef8f3;
    }

    .syndicate-photo {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
    }

    .syndicate-name {
        font-weight: 600;
    }

    .no-data {
        text-align: center;
        padding: 30px !important;
        color: #777;
    }

    @media (max-width: 768px) {

        .syndicate-section {
            padding: 30px 10px;
        }

        .syndicate-table {
            min-width: 700px;
        }

        .syndicate-table th,
        .syndicate-table td {
            padding: 8px;
        }

        .syndicate-photo {
            width: 55px;
            height: 55px;
        }

    }

</style>


<section class="syndicate-section">

    <div class="container">

        <h1 class="syndicate-title">
            Syndicate
        </h1>

        <div class="syndicate-line"></div>

        <div class="syndicate-table-wrapper">

            <table class="syndicate-table">

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

                    @forelse($syndicates as $syndicate)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>

                                <img
                                    src="{{ $syndicate->image_url }}"
                                    alt="{{ $syndicate->name }}"
                                    class="syndicate-photo"
                                >

                            </td>

                            <td class="syndicate-name">
                                {{ $syndicate->name }}
                            </td>

                            <td>
                                {{ $syndicate->position }}
                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="4" class="no-data">
                                No Syndicate information found.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</section>

@endsection