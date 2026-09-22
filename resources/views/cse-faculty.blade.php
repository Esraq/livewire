@extends('layouts.app')

@section('title', 'CSE Faculty | Khwaja Yunus Ali University')

@section('content')

<style>

    .faculty-section {
        padding: 45px 15px;
        background: #ffffff;
    }

    .faculty-container {
        width: 100%;
        max-width: 1150px;
        margin: 0 auto;
    }

    .faculty-heading {
        text-align: center;
        margin-bottom: 25px;
    }

    .faculty-heading h2 {
        margin: 0 0 8px;
        font-size: 26px;
        font-weight: 700;
        color: #222;
    }

    .faculty-heading p {
        margin: 0 0 12px;
        font-size: 15px;
        color: #666;
    }

    .faculty-line {
        width: 70px;
        height: 3px;
        background: #e8552e;
        margin: 0 auto;
    }

    .faculty-table-wrapper {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .faculty-table {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        font-size: 14px;
    }

    .faculty-table th {
        background: #0f6b46;
        color: #fff;
        font-weight: 600;
        text-align: left;
        padding: 12px;
        border: 1px solid #d8d8d8;
        vertical-align: middle;
    }

    .faculty-table td {
        padding: 12px;
        border: 1px solid #d8d8d8;
        vertical-align: middle;
        color: #333;
    }

    .faculty-table tbody tr:nth-child(even) {
        background: #f6f7f6;
    }

    .faculty-table tbody tr:hover {
        background: #eef8f3;
    }

    .faculty-photo {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
    }

    .no-photo {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        background: #e9ecef;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 11px;
        color: #777;
        text-align: center;
    }

    .faculty-name {
        font-weight: 600;
        color: #222;
    }

    .faculty-table a {
        color: #0f6b46;
        text-decoration: none;
    }

    .faculty-table a:hover {
        text-decoration: underline;
    }

    .profile-btn {
        display: inline-block;
        padding: 7px 14px;
        background: #0f6b46;
        color: #fff !important;
        border-radius: 5px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none !important;
        white-space: nowrap;
    }

    .profile-btn:hover {
        background: #095236;
        color: #fff !important;
    }

    .no-data {
        text-align: center;
        padding: 30px !important;
        color: #777;
    }

    @media (max-width: 768px) {

        .faculty-section {
            padding: 30px 10px;
        }

        .faculty-heading h2 {
            font-size: 22px;
        }

        .faculty-table {
            min-width: 950px;
        }

        .faculty-table th,
        .faculty-table td {
            padding: 9px;
        }

        .faculty-photo,
        .no-photo {
            width: 55px;
            height: 55px;
        }
    }

</style>


<section class="faculty-section">

    <div class="faculty-container">

        <div class="faculty-heading">

            <h2>
                Department of Computer Science and Engineering
            </h2>

            <p>
                Faculty Members
            </p>

            <div class="faculty-line"></div>

        </div>


        <div class="faculty-table-wrapper">

            <table class="faculty-table">

                <thead>

                    <tr>

                        <th style="width:60px;">
                            SL
                        </th>

                        <th style="width:100px;">
                            Photo
                        </th>

                        <th>
                            Name
                        </th>

                        <th>
                            Position
                        </th>

                        <th>
                            Email
                        </th>

                        <th>
                            Mobile
                        </th>

                        <th style="width:130px; text-align:center;">
                            Profile
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($facultyMembers as $faculty)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>


                            <td>

                                @if(!empty($faculty->image))

                                    <img
                                        src="{{ asset($faculty->image) }}"
                                        alt="{{ $faculty->name }}"
                                        class="faculty-photo"
                                    >

                                @else

                                    <div class="no-photo">
                                        No Photo
                                    </div>

                                @endif

                            </td>


                            <td class="faculty-name">
                                {{ $faculty->name }}
                            </td>


                            <td>
                                {{ $faculty->position ?: 'N/A' }}
                            </td>


                            <td>

                                @if(!empty($faculty->email))

                                    <a href="mailto:{{ $faculty->email }}">
                                        {{ $faculty->email }}
                                    </a>

                                @else

                                    N/A

                                @endif

                            </td>


                            <td>

                                @if(!empty($faculty->mobile_no))

                                    <a href="tel:{{ $faculty->mobile_no }}">
                                        {{ $faculty->mobile_no }}
                                    </a>

                                @else

                                    N/A

                                @endif

                            </td>


                            <td style="text-align:center;">

                                <a
                                    href="{{ route('cse.faculty.profile', $faculty->id) }}"
                                    class="profile-btn"
                                >
                                    View Profile
                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="no-data">
                                No CSE faculty members found.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</section>

@endsection