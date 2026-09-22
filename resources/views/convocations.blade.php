@extends('layouts.app')

@section('title', 'Convocations | Khwaja Yunus Ali University')

@section('content')

<div class="container convocation-table-container">

    <div class="convocation-table-box">

        <div class="convocation-heading">
            <h2>Convocation</h2>
        </div>

        <div class="table-responsive">

            <table class="convocation-table">

                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Details</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($convocations as $item)

                        <tr>

                            <td class="title-column">
                                {{ $item->title }}
                            </td>

                            <td class="details-column">

                                <a href="{{ route('convocation.show', $item->id) }}"
                                   class="details-btn">
                                    View Details
                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="2" class="empty-data">
                                No convocation information found.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


<style>

    .convocation-table-container {
        padding: 50px 20px;
    }

    .convocation-table-box {
        width: 100%;
        max-width: 950px;

        margin: 0 auto;
        padding: 25px;

        background: #ffffff;

        border: 1px solid #dddddd;
        border-radius: 8px;

        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
    }

    .convocation-heading {
        text-align: center;
        margin-bottom: 25px;
    }

    .convocation-heading h2 {
        margin: 0;

        font-size: 30px;
        font-weight: 700;

        color: #222222;
    }

    .convocation-table {
        width: 100%;

        margin: 0 auto;

        border-collapse: collapse;

        background-color: #ffffff;
    }

    .convocation-table th,
    .convocation-table td {
        border: 1px solid #cccccc;

        padding: 15px 20px;

        vertical-align: middle;
    }

    .convocation-table th {
        background-color: #0f6b46;

        color: #ffffff;

        text-align: center;

        font-size: 16px;
        font-weight: 700;
    }

    .title-column {
        text-align: left;

        font-size: 16px;

        color: #333333;
    }

    .details-column {
        width: 180px;

        text-align: center;
    }

    .details-btn {
        display: inline-block;

        padding: 8px 18px;

        background-color: #0f6b46;

        color: #ffffff;

        border: 1px solid #0f6b46;
        border-radius: 5px;

        text-decoration: none;

        font-size: 14px;
        font-weight: 600;

        transition: all 0.3s ease;
    }

    .details-btn:hover {
        background-color: #095236;
        border-color: #095236;

        color: #ffffff;

        text-decoration: none;
    }

    .convocation-table tbody tr:nth-child(even) {
        background-color: #f8f9fa;
    }

    .convocation-table tbody tr:hover {
        background-color: #eef8f3;
    }

    .empty-data {
        text-align: center;

        padding: 35px !important;

        color: #777777;
    }

    @media (max-width: 768px) {

        .convocation-table-container {
            padding: 30px 15px;
        }

        .convocation-table-box {
            padding: 18px;
        }

        .convocation-heading h2 {
            font-size: 26px;
        }

        .convocation-table th,
        .convocation-table td {
            padding: 12px 15px;
        }

    }

    @media (max-width: 576px) {

        .convocation-table-container {
            padding: 20px 10px;
        }

        .convocation-table-box {
            padding: 12px;
        }

        .convocation-heading {
            margin-bottom: 18px;
        }

        .convocation-heading h2 {
            font-size: 23px;
        }

        .convocation-table {
            min-width: 500px;
        }

        .convocation-table th,
        .convocation-table td {
            padding: 10px 12px;

            font-size: 14px;
        }

        .details-column {
            width: 140px;
        }

        .details-btn {
            padding: 7px 12px;
            font-size: 13px;
        }

    }

</style>

@endsection