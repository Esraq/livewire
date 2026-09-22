@extends('layouts.app')

@section('title', 'Board of Trustees | Khwaja Yunus Ali University')

@section('content')

<style>

    .bot-section {
        padding: 40px 0;
        background: #fff;
    }

    .bot-title {
        text-align: center;
        font-size: 18px;
        font-weight: 600;
        color: #222;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .bot-line {
        height: 1px;
        background: #e8552e;
        width: 100%;
        margin-bottom: 15px;
    }

    .table-wrapper {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .bot-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
        background: #fff;
    }

    .bot-table th {
        background: #fff;
        border: 1px solid #d8d8d8;
        padding: 10px;
        text-align: left;
        font-weight: 600;
        vertical-align: middle;
    }

    .bot-table td {
        border: 1px solid #d8d8d8;
        padding: 10px;
        color: #333;
        vertical-align: middle;
    }

    .bot-table tbody tr:nth-child(odd) {
        background: #f2f2f2;
    }

    .bot-table tbody tr:nth-child(even) {
        background: #fff;
    }

    .bot-table tbody tr:hover {
        background: #eef8f3;
    }

    .bot-photo {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
    }

    .bot-name {
        font-weight: 600;
    }

    .no-data {
        text-align: center;
        padding: 30px !important;
        color: #777;
    }

    @media (max-width: 768px) {

        .bot-section {
            padding: 30px 10px;
        }

        .bot-table {
            min-width: 700px;
        }

        .bot-table th,
        .bot-table td {
            padding: 8px;
        }

        .bot-photo {
            width: 55px;
            height: 55px;
        }
    }

</style>


<section class="bot-section">

    <div class="container">

        <h1 class="bot-title">
            Board of Trustees
        </h1>

        <div class="bot-line"></div>

        <div class="table-wrapper">

            <table class="bot-table">

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

                    @forelse($bots as $bot)

                        <tr>

                            {{-- Serial --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>


                            {{-- Photo --}}
                            <td>

                                <img
                                    src="{{ $bot->image_url }}"
                                    alt="{{ $bot->name }}"
                                    class="bot-photo"
                                >

                            </td>


                            {{-- Name --}}
                            <td class="bot-name">
                                {{ $bot->name }}
                            </td>


                            {{-- Position --}}
                            <td>
                                {{ $bot->position }}
                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="4" class="no-data">
                                No Board of Trustees information found.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</section>

@endsection