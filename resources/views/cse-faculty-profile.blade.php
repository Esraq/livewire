@extends('layouts.app')

@section('title', $faculty->name . ' | CSE Faculty')

@section('content')

<style>

    /* =========================================
       PROFILE PAGE
    ========================================= */

    .faculty-profile-page {
        padding: 45px 15px 60px;
        background: #f5f7f6;
    }

    .faculty-profile-container {
        width: 100%;
        max-width: 1150px;
        margin: 0 auto;
    }


    /* =========================================
       TOP PROFILE HEADER
    ========================================= */

    .faculty-profile-header {
        display: flex;
        align-items: center;
        gap: 25px;

        background: #ffffff;

        border: 1px solid #e1e6e3;
        border-radius: 10px;

        padding: 25px;

        margin-bottom: 25px;

        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.05);
    }

    .faculty-header-photo {
        width: 135px;
        height: 135px;

        flex: 0 0 135px;

        border-radius: 6px;
        overflow: hidden;

        background: #eeeeee;
        border: 1px solid #dddddd;
    }

    .faculty-header-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .faculty-no-photo {
        width: 100%;
        height: 100%;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #777777;
        font-size: 13px;
    }

    .faculty-header-info h1 {
        margin: 0 0 7px;

        color: #1d2923;

        font-size: 28px;
        font-weight: 700;
    }

    .faculty-header-position {
        margin: 0 0 7px;

        color: #0f6b46;

        font-size: 16px;
        font-weight: 600;
    }

    .faculty-header-department {
        margin: 0;

        color: #68716c;

        font-size: 14px;
    }


    /* =========================================
       TWO COLUMN LAYOUT
    ========================================= */

    .faculty-profile-layout {
        display: grid;

        grid-template-columns: 260px minmax(0, 1fr);

        gap: 25px;

        align-items: start;
    }


    /* =========================================
       SIDEBAR
    ========================================= */

    .faculty-sidebar {
        background: #ffffff;

        border: 1px solid #e1e6e3;
        border-radius: 8px;

        overflow: hidden;

        position: sticky;
        top: 95px;

        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.04);
    }

    .sidebar-title {
        margin: 0;

        padding: 16px 18px;

        background: #0f6b46;

        color: #ffffff;

        font-size: 16px;
        font-weight: 700;
    }

    .faculty-sidebar ul {
        list-style: none;

        margin: 0;
        padding: 0;
    }

    .faculty-sidebar li {
        margin: 0;
    }

    .faculty-sidebar a {
        display: block;

        padding: 13px 18px;

        color: #3d4842;

        text-decoration: none;

        border-bottom: 1px solid #eeeeee;

        font-size: 14px;
        font-weight: 500;

        transition:
            background .2s ease,
            color .2s ease,
            padding-left .2s ease;
    }

    .faculty-sidebar li:last-child a {
        border-bottom: none;
    }

    .faculty-sidebar a:hover,
    .faculty-sidebar a.active {
        background: #eef8f3;
        color: #0f6b46;

        padding-left: 23px;
    }

    .faculty-sidebar a.active {
        border-left: 4px solid #e8552e;

        font-weight: 700;
    }


    /* =========================================
       MAIN PROFILE CONTENT
    ========================================= */

    .faculty-profile-content {
        min-width: 0;
    }

    .profile-content-section {
        background: #ffffff;

        border: 1px solid #e1e6e3;
        border-radius: 8px;

        padding: 28px;

        margin-bottom: 25px;

        box-shadow: 0 3px 15px rgba(0, 0, 0, .04);

        scroll-margin-top: 100px;
    }

    .profile-content-section:last-child {
        margin-bottom: 0;
    }

    .section-heading {
        display: flex;
        align-items: center;

        gap: 12px;

        margin-bottom: 22px;

        padding-bottom: 13px;

        border-bottom: 1px solid #e5e9e7;
    }

    .section-heading::before {
        content: '';

        width: 4px;
        height: 25px;

        border-radius: 4px;

        background: #e8552e;
    }

    .section-heading h2 {
        margin: 0;

        color: #1e2b24;

        font-size: 21px;
        font-weight: 700;
    }


    /* =========================================
       PERSONAL INFORMATION
    ========================================= */

    .profile-info-table {
        width: 100%;

        border-collapse: collapse;
    }

    .profile-info-table tr {
        border-bottom: 1px solid #eeeeee;
    }

    .profile-info-table tr:last-child {
        border-bottom: none;
    }

    .profile-info-table th {
        width: 190px;

        padding: 14px 15px;

        text-align: left;

        color: #333333;

        font-size: 14px;
        font-weight: 600;

        vertical-align: top;
    }

    .profile-info-table td {
        padding: 14px 15px;

        color: #616b65;

        font-size: 14px;

        vertical-align: top;

        word-break: break-word;
    }

    .profile-info-table a {
        color: #0f6b46;
        text-decoration: none;
    }

    .profile-info-table a:hover {
        text-decoration: underline;
    }


    /* =========================================
       EMPTY SECTION
    ========================================= */

    .profile-empty {
        padding: 18px;

        background: #f8faf9;

        border: 1px dashed #d6ded9;
        border-radius: 5px;

        color: #7a837e;

        font-size: 14px;
        line-height: 1.6;
    }


    /* =========================================
       BACK BUTTON
    ========================================= */

    .profile-back {
        display: inline-block;

        margin-top: 5px;

        padding: 9px 18px;

        background: #0f6b46;

        color: #ffffff !important;

        border-radius: 5px;

        font-size: 14px;
        font-weight: 600;

        text-decoration: none !important;
    }

    .profile-back:hover {
        background: #095236;
    }


    /* =========================================
       TABLET
    ========================================= */

    @media (max-width: 900px) {

        .faculty-profile-layout {
            grid-template-columns: 220px minmax(0, 1fr);
            gap: 18px;
        }

        .profile-info-table th {
            width: 150px;
        }

    }


    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 768px) {

        .faculty-profile-page {
            padding: 25px 10px 40px;
        }

        .faculty-profile-header {
            flex-direction: column;

            text-align: center;

            padding: 22px 15px;
        }

        .faculty-header-photo {
            width: 130px;
            height: 130px;

            flex-basis: 130px;
        }

        .faculty-header-info h1 {
            font-size: 23px;
        }

        .faculty-profile-layout {
            grid-template-columns: 1fr;
        }

        .faculty-sidebar {
            position: static;
        }

        .faculty-sidebar ul {
            display: flex;

            overflow-x: auto;

            white-space: nowrap;

            -webkit-overflow-scrolling: touch;
        }

        .faculty-sidebar li {
            flex: 0 0 auto;
        }

        .faculty-sidebar a {
            border-bottom: none;
            border-right: 1px solid #eeeeee;

            padding: 12px 15px;
        }

        .faculty-sidebar a:hover,
        .faculty-sidebar a.active {
            padding-left: 15px;
        }

        .faculty-sidebar a.active {
            border-left: none;
            border-bottom: 3px solid #e8552e;
        }

        .profile-content-section {
            padding: 20px 15px;
        }

        .section-heading h2 {
            font-size: 19px;
        }

    }


    /* =========================================
       SMALL MOBILE
    ========================================= */

    @media (max-width: 500px) {

        .profile-info-table,
        .profile-info-table tbody,
        .profile-info-table tr,
        .profile-info-table th,
        .profile-info-table td {
            display: block;
            width: 100%;
        }

        .profile-info-table tr {
            padding: 12px 0;
        }

        .profile-info-table th {
            padding: 0 0 5px;

            color: #333333;
        }

        .profile-info-table td {
            padding: 0;
        }

    }

</style>


<section class="faculty-profile-page">

    <div class="faculty-profile-container">


        {{-- =========================================
             PROFILE HEADER
        ========================================== --}}

        <div class="faculty-profile-header">

            <div class="faculty-header-photo">

                @if(!empty($faculty->image))

                    <img
                        src="{{ asset($faculty->image) }}"
                        alt="{{ $faculty->name }}"
                    >

                @else

                    <div class="faculty-no-photo">
                        No Photo
                    </div>

                @endif

            </div>


            <div class="faculty-header-info">

                <h1>
                    {{ $faculty->name }}
                </h1>

                <p class="faculty-header-position">
                    {{ $faculty->position ?: 'Faculty Member' }}
                </p>

                <p class="faculty-header-department">
                    Department of Computer Science and Engineering
                </p>

            </div>

        </div>



        {{-- =========================================
             PROFILE LAYOUT
        ========================================== --}}

        <div class="faculty-profile-layout">


            {{-- =====================================
                 LEFT SIDEBAR
            ====================================== --}}

            <aside class="faculty-sidebar">

                <h3 class="sidebar-title">
                    Profile Menu
                </h3>

                <ul>

                    <li>
                        <a
                            href="#personal-information"
                            class="active"
                        >
                            Personal Information
                        </a>
                    </li>

                    <li>
                        <a href="#academic-qualification">
                            Academic Qualification
                        </a>
                    </li>

                    <li>
                        <a href="#training-experience">
                            Training Experience
                        </a>
                    </li>

                    <li>
                        <a href="#teaching-experience">
                            Teaching Experience
                        </a>
                    </li>

                    <li>
                        <a href="#research-interest">
                            Research Interest
                        </a>
                    </li>

                    <li>
                        <a href="#publications">
                            Publications
                        </a>
                    </li>

                    <li>
                        <a href="#awards">
                            Award & Scholarship
                        </a>
                    </li>

                    <li>
                        <a href="#previous-employment">
                            Previous Employment
                        </a>
                    </li>

                </ul>

            </aside>



            {{-- =====================================
                 RIGHT CONTENT
            ====================================== --}}

            <main class="faculty-profile-content">


                {{-- =================================
                     PERSONAL INFORMATION
                ================================== --}}

                <section
                    class="profile-content-section"
                    id="personal-information"
                >

                    <div class="section-heading">
                        <h2>Personal Information</h2>
                    </div>


                    <table class="profile-info-table">

                        <tbody>

                            <tr>

                                <th>
                                    Name
                                </th>

                                <td>
                                    {{ $faculty->name }}
                                </td>

                            </tr>


                            <tr>

                                <th>
                                    Designation
                                </th>

                                <td>
                                    {{ $faculty->position ?: 'N/A' }}
                                </td>

                            </tr>


                            <tr>

                                <th>
                                    Department
                                </th>

                                <td>
                                    Computer Science and Engineering
                                </td>

                            </tr>


                            <tr>

                                <th>
                                    Email
                                </th>

                                <td>

                                    @if(!empty($faculty->email))

                                        <a href="mailto:{{ $faculty->email }}">
                                            {{ $faculty->email }}
                                        </a>

                                    @else

                                        N/A

                                    @endif

                                </td>

                            </tr>


                            <tr>

                                <th>
                                    Mobile
                                </th>

                                <td>

                                    @if(!empty($faculty->mobile_no))

                                        <a href="tel:{{ $faculty->mobile_no }}">
                                            {{ $faculty->mobile_no }}
                                        </a>

                                    @else

                                        N/A

                                    @endif

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </section>



                {{-- =================================
                     ACADEMIC QUALIFICATION
                ================================== --}}

              <section
    class="profile-content-section"
    id="academic-qualification"
>

    <div class="section-heading">
        <h2>Academic Qualification</h2>
    </div>

    @forelse($faculty->results as $result)

        <div class="qualification-item">

            <div class="qualification-row">
                <strong>Degree:</strong>
                <span>{{ $result->degree_name}}</span>
            </div>

            <div class="qualification-row">
                <strong>Institution:</strong>
                <span>{{ $result->institution ?? 'N/A' }}</span>
            </div>

           

            <div class="qualification-row">
                <strong>Passing Year:</strong>
                <span>{{ $result->year ?? 'N/A' }}</span>
            </div>

        </div>

    @empty

        <div class="profile-empty">
            Academic qualification information has not been added yet.
        </div>

    @endforelse

</section>



                {{-- =================================
                     TRAINING EXPERIENCE
                ================================== --}}

           <section
    class="profile-content-section"
    id="training-experience"
>

    <div class="section-heading">
        <h2>Training Experience</h2>
    </div>

    @forelse($faculty->trains as $training)

        <div
            style="
                display: flex;
                align-items: center;
                gap: 14px;
                padding: 15px 18px;
                margin-bottom: 12px;
                background: #f8faf9;
                border: 1px solid #e0e6e3;
                border-left: 4px solid #0f6b46;
                border-radius: 6px;
            "
        >

            <div
                style="
                    width: 32px;
                    height: 32px;
                    min-width: 32px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    background: #eef8f3;
                    color: #0f6b46;
                    font-size: 15px;
                    font-weight: 700;
                "
            >
                ✓
            </div>

            <div
                style="
                    color: #333333;
                    font-size: 15px;
                    font-weight: 600;
                    line-height: 1.6;
                "
            >
                {{ $training->training_name }}
            </div>

        </div>

    @empty

        <div
            style="
                padding: 18px;
                background: #f8faf9;
                border: 1px dashed #d6ded9;
                border-radius: 5px;
                color: #7a837e;
                font-size: 14px;
            "
        >
            No training information available.
        </div>

    @endforelse

</section>
                {{-- =================================
                     TEACHING EXPERIENCE
                ================================== --}}
<section
    class="profile-content-section"
    id="teaching-experience"
>

    <div class="section-heading">
        <h2>Courses teach</h2>
    </div>

    @forelse($faculty->teachings as $teaching)

        <div
            style="
                display:flex;
                align-items:center;
                gap:14px;
                padding:15px 18px;
                margin-bottom:12px;
                background:#f8faf9;
                border:1px solid #e0e6e3;
                border-left:4px solid #0f6b46;
                border-radius:6px;
            "
        >

            <div
                style="
                    width:32px;
                    height:32px;
                    min-width:32px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    border-radius:50%;
                    background:#eef8f3;
                    color:#0f6b46;
                    font-size:15px;
                    font-weight:700;
                "
            >
                ✓
            </div>

            <div
                style="
                    color:#333333;
                    font-size:15px;
                    font-weight:600;
                    line-height:1.6;
                "
            >
                {{ $teaching->subject_name }}
            </div>

        </div>

    @empty

        <div
            style="
                padding:18px;
                background:#f8faf9;
                border:1px dashed #d6ded9;
                border-radius:5px;
                color:#7a837e;
                font-size:14px;
            "
        >
           
        </div>

    @endforelse

</section>



                {{-- =================================
                     RESEARCH INTEREST
                ================================== --}}

               <section
    class="profile-content-section"
    id="research-interest"
>

    <div class="section-heading">
        <h2>Research Interest</h2>
    </div>

    @forelse($faculty->research as $research)

        <div
            style="
                display:flex;
                align-items:center;
                gap:14px;
                padding:15px 18px;
                margin-bottom:12px;
                background:#f8faf9;
                border:1px solid #e0e6e3;
                border-left:4px solid #0f6b46;
                border-radius:6px;
            "
        >

            <div
                style="
                    width:32px;
                    height:32px;
                    min-width:32px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    border-radius:50%;
                    background:#eef8f3;
                    color:#0f6b46;
                    font-size:15px;
                    font-weight:700;
                "
            >
                ✓
            </div>

            <div
                style="
                    color:#333333;
                    font-size:15px;
                    font-weight:600;
                    line-height:1.6;
                "
            >
                {{ $research->research_interest }}
            </div>

        </div>

    @empty

        <div
            style="
                padding:18px;
                background:#f8faf9;
                border:1px dashed #d6ded9;
                border-radius:5px;
                color:#7a837e;
                font-size:14px;
            "
        >
            No research information available.
        </div>

    @endforelse

</section>

                {{-- =================================
                     PUBLICATIONS
                ================================== --}}

                <section
    class="profile-content-section"
    id="publications"
>

    <div class="section-heading">
        <h2>Publications</h2>
    </div>

    @forelse($faculty->publications as $publication)

        <div
            style="
                display:flex;
                align-items:flex-start;
                gap:14px;
                padding:16px 18px;
                margin-bottom:12px;
                background:#f8faf9;
                border:1px solid #e0e6e3;
                border-left:4px solid #0f6b46;
                border-radius:6px;
            "
        >

            <div
                style="
                    width:32px;
                    height:32px;
                    min-width:32px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    border-radius:50%;
                    background:#eef8f3;
                    color:#0f6b46;
                    font-size:14px;
                    font-weight:700;
                "
            >
                ✓
            </div>

            <div
                style="
                    color:#333333;
                    font-size:15px;
                    font-weight:600;
                    line-height:1.7;
                    word-break:break-word;
                "
            >
                {{ $publication->publication_name }}
            </div>

        </div>

    @empty

        <div
            style="
                padding:18px;
                background:#f8faf9;
                border:1px dashed #d6ded9;
                border-radius:5px;
                color:#7a837e;
                font-size:14px;
            "
        >
            No publication information available.
        </div>

    @endforelse

</section>



                {{-- =================================
                     AWARD & SCHOLARSHIP
                ================================== --}}

              <section
    class="profile-content-section"
    id="awards"
>

    <div class="section-heading">
        <h2>Award & Scholarship</h2>
    </div>

    @forelse($faculty->awards as $award)

        <div
            style="
                display:flex;
                align-items:flex-start;
                gap:14px;
                padding:15px 18px;
                margin-bottom:12px;
                background:#f8faf9;
                border:1px solid #e0e6e3;
                border-left:4px solid #0f6b46;
                border-radius:6px;
            "
        >

            <div
                style="
                    width:32px;
                    height:32px;
                    min-width:32px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    border-radius:50%;
                    background:#eef8f3;
                    color:#0f6b46;
                    font-size:15px;
                    font-weight:700;
                "
            >
                ✓
            </div>

            <div
                style="
                    color:#333333;
                    font-size:15px;
                    font-weight:600;
                    line-height:1.7;
                    word-break:break-word;
                "
            >
                {{ $award->award_name }}
            </div>

        </div>

    @empty

        <div
            style="
                padding:18px;
                background:#f8faf9;
                border:1px dashed #d6ded9;
                border-radius:5px;
                color:#7a837e;
                font-size:14px;
            "
        >
            No award or scholarship information available.
        </div>

    @endforelse

</section>

                {{-- =================================
                     PREVIOUS EMPLOYMENT
                ================================== --}}

                <section
    class="profile-content-section"
    id="previous-employment"
>

    <div class="section-heading">
        <h2>Previous Employment</h2>
    </div>

    @forelse($faculty->experiences as $experience)

        <div
            style="
                display:flex;
                align-items:flex-start;
                gap:14px;
                padding:15px 18px;
                margin-bottom:12px;
                background:#f8faf9;
                border:1px solid #e0e6e3;
                border-left:4px solid #0f6b46;
                border-radius:6px;
            "
        >

            <div
                style="
                    width:32px;
                    height:32px;
                    min-width:32px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    border-radius:50%;
                    background:#eef8f3;
                    color:#0f6b46;
                    font-size:15px;
                    font-weight:700;
                "
            >
                ✓
            </div>

            <div
                style="
                    color:#333333;
                    font-size:15px;
                    font-weight:600;
                    line-height:1.7;
                    word-break:break-word;
                "
            >
                {{ $experience->institution_name }} from {{ $experience->start_date }} to {{$experience->end_date}}
            </div>

        </div>

    @empty

        <div
            style="
                padding:18px;
                background:#f8faf9;
                border:1px dashed #d6ded9;
                border-radius:5px;
                color:#7a837e;
                font-size:14px;
            "
        >
            No previous employment information available.
        </div>

    @endforelse

</section>

<script>

    document.addEventListener('DOMContentLoaded', function () {

        const links = document.querySelectorAll('.faculty-sidebar a');

        links.forEach(function (link) {

            link.addEventListener('click', function () {

                links.forEach(function (item) {
                    item.classList.remove('active');
                });

                this.classList.add('active');

            });

        });

    });

</script>

@endsection