@extends('layouts.app')

@section('title', 'School of Business and Social Science | Khwaja Yunus Ali University')

@section('content')

<style>

    /* =====================================
       SCHOOL PAGE
    ====================================== */

    .school-page {
        background: #ffffff;
        color: #29342f;
    }

    .school-container {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
    }


    /* =====================================
       HERO
    ====================================== */

    .school-hero {
        position: relative;
        padding: 90px 20px;
        background:
            linear-gradient(
                135deg,
                rgba(9, 82, 54, .96),
                rgba(15, 107, 70, .90)
            );
        overflow: hidden;
    }

    .school-hero::after {
        content: '';
        position: absolute;

        width: 350px;
        height: 350px;

        right: -100px;
        top: -130px;

        border-radius: 50%;

        background: rgba(255,255,255,.06);
    }

    .school-hero-content {
        position: relative;
        z-index: 2;

        max-width: 900px;
        margin: 0 auto;

        text-align: center;

        color: #ffffff;
    }

    .school-small-title {
        display: inline-block;

        margin-bottom: 15px;

        color: #d9f0e5;

        font-size: 13px;
        font-weight: 700;

        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .school-hero h1 {
        margin: 0 0 20px;

        font-size: 44px;
        font-weight: 800;

        line-height: 1.2;
    }

    .school-hero p {
        max-width: 760px;
        margin: 0 auto;

        font-size: 17px;
        line-height: 1.8;

        color: rgba(255,255,255,.9);
    }


    /* =====================================
       SECTION COMMON
    ====================================== */

    .school-section {
        padding: 70px 0;
    }

    .school-section-alt {
        background: #f7faf8;
    }

    .section-heading {
        margin-bottom: 35px;
    }

    .section-heading.center {
        text-align: center;
    }

    .section-label {
        display: block;

        margin-bottom: 8px;

        color: #0f6b46;

        font-size: 12px;
        font-weight: 800;

        letter-spacing: 1.7px;
        text-transform: uppercase;
    }

    .section-heading h2 {
        margin: 0;

        color: #17251f;

        font-size: 32px;
        font-weight: 800;
    }

    .title-line {
        width: 65px;
        height: 3px;

        margin-top: 13px;

        background: #e8552e;
        border-radius: 4px;
    }

    .section-heading.center .title-line {
        margin-left: auto;
        margin-right: auto;
    }


    /* =====================================
       OVERVIEW
    ====================================== */

    .overview-grid {
        display: grid;

        grid-template-columns: 1.35fr .65fr;

        gap: 55px;

        align-items: start;
    }

    .overview-content p {
        margin: 0 0 18px;

        font-size: 16px;
        line-height: 1.85;

        color: #5b6761;
    }

    .school-info-box {
        padding: 30px;

        background: #0f6b46;

        border-radius: 14px;

        color: #ffffff;

        box-shadow:
            0 12px 30px rgba(15,107,70,.15);
    }

    .school-info-box h3 {
        margin: 0 0 20px;

        font-size: 21px;
        font-weight: 750;
    }

    .school-info-item {
        padding: 14px 0;

        border-bottom:
            1px solid rgba(255,255,255,.15);
    }

    .school-info-item:last-child {
        border-bottom: 0;
    }

    .school-info-item span {
        display: block;

        margin-bottom: 4px;

        color: #bfe0cf;

        font-size: 12px;

        text-transform: uppercase;

        letter-spacing: 1px;
    }

    .school-info-item strong {
        font-size: 15px;
        font-weight: 600;
    }


    /* =====================================
       VISION / MISSION
    ====================================== */

    .vm-grid {
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 25px;
    }

    .vm-card {
        position: relative;

        padding: 35px;

        background: #ffffff;

        border: 1px solid #e2eae6;
        border-radius: 12px;

        box-shadow:
            0 5px 20px rgba(15,107,70,.06);
    }

    .vm-number {
        display: flex;

        width: 48px;
        height: 48px;

        align-items: center;
        justify-content: center;

        margin-bottom: 20px;

        background: #eef8f3;

        border-radius: 10px;

        color: #0f6b46;

        font-weight: 800;
        font-size: 18px;
    }

    .vm-card h3 {
        margin: 0 0 14px;

        font-size: 22px;
        font-weight: 750;

        color: #17251f;
    }

    .vm-card p {
        margin: 0;

        color: #64706a;

        font-size: 15px;
        line-height: 1.8;
    }


    /* =====================================
       DEPARTMENTS
    ====================================== */

    .department-grid {
        display: grid;

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        gap: 22px;
    }

    .department-card {
        display: flex;
        flex-direction: column;

        min-height: 210px;

        padding: 28px;

        background: #ffffff;

        border: 1px solid #e1e9e5;
        border-radius: 12px;

        text-decoration: none;

        transition:
            transform .25s ease,
            box-shadow .25s ease,
            border-color .25s ease;
    }

    .department-card:hover {
        transform: translateY(-5px);

        border-color: #b9d9c8;

        box-shadow:
            0 12px 28px rgba(15,107,70,.10);
    }

    .department-icon {
        width: 45px;
        height: 45px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 20px;

        border-radius: 9px;

        background: #eef8f3;

        color: #0f6b46;

        font-size: 19px;
        font-weight: 800;
    }

    .department-card h3 {
        margin: 0 0 10px;

        color: #203029;

        font-size: 18px;
        font-weight: 700;

        line-height: 1.4;
    }

    .department-card p {
        margin: 0 0 18px;

        color: #6a756f;

        font-size: 14px;
        line-height: 1.7;
    }

    .department-link {
        margin-top: auto;

        color: #0f6b46;

        font-size: 13px;
        font-weight: 700;
    }


    /* =====================================
       PROGRAMS
    ====================================== */

    .program-groups {
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 30px;
    }

    .program-box {
        background: #ffffff;

        border: 1px solid #e1e9e5;
        border-radius: 12px;

        overflow: hidden;
    }

    .program-box-header {
        padding: 18px 24px;

        background: #0f6b46;

        color: #ffffff;

        font-size: 17px;
        font-weight: 700;
    }

    .program-list {
        list-style: none;

        margin: 0;
        padding: 0;
    }

    .program-list li {
        display: flex;

        align-items: center;

        gap: 12px;

        padding: 17px 22px;

        border-bottom: 1px solid #edf1ef;

        color: #3f4d46;

        font-size: 14px;
        line-height: 1.5;
    }

    .program-list li:last-child {
        border-bottom: 0;
    }

    .program-list li::before {
        content: '';

        width: 7px;
        height: 7px;

        flex: 0 0 7px;

        border-radius: 50%;

        background: #e8552e;
    }


    /* =====================================
       CTA
    ====================================== */

    .school-cta {
        padding: 65px 20px;

        background:
            linear-gradient(
                135deg,
                #095236,
                #0f6b46
            );

        text-align: center;

        color: #ffffff;
    }

    .school-cta h2 {
        margin: 0 0 15px;

        font-size: 30px;
        font-weight: 800;
    }

    .school-cta p {
        max-width: 650px;

        margin: 0 auto 25px;

        color: rgba(255,255,255,.85);

        line-height: 1.7;
    }

    .school-btn {
        display: inline-block;

        padding: 12px 25px;

        background: #e8552e;

        border-radius: 7px;

        color: #ffffff;

        text-decoration: none;

        font-weight: 700;

        transition:
            transform .2s ease,
            background .2s ease;
    }

    .school-btn:hover {
        background: #d84723;
        color: #ffffff;

        transform: translateY(-2px);
    }


    /* =====================================
       TABLET
    ====================================== */

    @media (max-width: 991px) {

        .school-hero {
            padding: 70px 20px;
        }

        .school-hero h1 {
            font-size: 36px;
        }

        .overview-grid {
            grid-template-columns: 1fr;
        }

        .department-grid {
            grid-template-columns:
                repeat(2, minmax(0,1fr));
        }

    }


    /* =====================================
       MOBILE
    ====================================== */

    @media (max-width: 650px) {

        .school-container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .school-hero {
            padding: 50px 15px;
        }

        .school-hero h1 {
            font-size: 29px;
        }

        .school-hero p {
            font-size: 15px;
        }

        .school-section {
            padding: 45px 0;
        }

        .section-heading h2 {
            font-size: 26px;
        }

        .vm-grid,
        .department-grid,
        .program-groups {
            grid-template-columns: 1fr;
        }

        .vm-card,
        .department-card {
            padding: 23px;
        }

        .school-info-box {
            padding: 24px;
        }

        .school-cta h2 {
            font-size: 25px;
        }

    }

</style>


<div class="school-page">


    {{-- =====================================
         HERO
    ====================================== --}}

    <section class="school-hero">

        <div class="school-hero-content">

            <span class="school-small-title">
                Khwaja Yunus Ali University
            </span>

            <h1>
                School of Business and Social Science
            </h1>

            <p>
                Developing knowledgeable, ethical and skilled graduates
                prepared for leadership, professional excellence and
                meaningful contribution to society.
            </p>

        </div>

    </section>



    {{-- =====================================
         OVERVIEW
    ====================================== --}}

    <section class="school-section">

        <div class="school-container">

            <div class="overview-grid">

                <div class="overview-content">

                    <div class="section-heading">

                        <span class="section-label">
                            About the School
                        </span>

                        <h2>Overview</h2>

                        <div class="title-line"></div>

                    </div>

                    <p>
                        The School of Business and Social Science brings
                        together academic disciplines concerned with
                        business, management, law, language, humanities
                        and society.
                    </p>

                    <p>
                        Its academic environment is designed to develop
                        analytical ability, communication skills,
                        professional knowledge, ethical awareness and
                        leadership qualities through teaching,
                        research and practical learning.
                    </p>

                    <p>
                        The School supports interdisciplinary learning
                        and prepares students to respond effectively to
                        changing professional, economic and social
                        environments.
                    </p>

                </div>


                <aside class="school-info-box">

                    <h3>
                        School at a Glance
                    </h3>

                    <div class="school-info-item">
                        <span>University</span>

                        <strong>
                            Khwaja Yunus Ali University
                        </strong>
                    </div>

                    <div class="school-info-item">
                        <span>School</span>

                        <strong>
                            Business and Social Science
                        </strong>
                    </div>

                    <div class="school-info-item">
                        <span>Departments</span>

                        <strong>
                            5 Academic Departments
                        </strong>
                    </div>

                    <div class="school-info-item">
                        <span>Location</span>

                        <strong>
                            Enayetpur, Chauhali, Sirajganj
                        </strong>
                    </div>

                </aside>

            </div>

        </div>

    </section>



    {{-- =====================================
         VISION & MISSION
    ====================================== --}}

    <section class="school-section school-section-alt">

        <div class="school-container">

            <div class="section-heading center">

                <span class="section-label">
                    Our Direction
                </span>

                <h2>Vision & Mission</h2>

                <div class="title-line"></div>

            </div>


            <div class="vm-grid">

                <div class="vm-card">

                    <div class="vm-number">
                        01
                    </div>

                    <h3>Vision</h3>

                    <p>
                        To cultivate a learning environment that
                        advances academic excellence, critical
                        thinking, ethical leadership and responsible
                        participation in business and society.
                    </p>

                </div>


                <div class="vm-card">

                    <div class="vm-number">
                        02
                    </div>

                    <h3>Mission</h3>

                    <p>
                        To provide student-focused education,
                        interdisciplinary knowledge and practical
                        learning opportunities that prepare graduates
                        for professional careers, entrepreneurship,
                        research and service to society.
                    </p>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================
         DEPARTMENTS
    ====================================== --}}

    <section class="school-section">

        <div class="school-container">

            <div class="section-heading center">

                <span class="section-label">
                    Academic Units
                </span>

                <h2>Departments</h2>

                <div class="title-line"></div>

            </div>


            <div class="department-grid">


                {{-- Business Administration --}}

                <div class="department-card">

                    <div class="department-icon">
                        BA
                    </div>

                    <h3>
                        Department of Business Administration
                    </h3>

                    <p>
                        Business, management, finance, marketing,
                        human resources and entrepreneurship education.
                    </p>

                    <span class="department-link">
                        Explore Department →
                    </span>

                </div>



                {{-- MIS --}}

                <div class="department-card">

                    <div class="department-icon">
                        MIS
                    </div>

                    <h3>
                        Department of Management Information Systems
                    </h3>

                    <p>
                        Integrating business management with
                        information systems and digital technologies.
                    </p>

                    <span class="department-link">
                        Explore Department →
                    </span>

                </div>



                {{-- English --}}

                <div class="department-card">

                    <div class="department-icon">
                        EN
                    </div>

                    <h3>
                        Department of English
                    </h3>

                    <p>
                        Developing expertise in English language,
                        literature, communication and critical
                        interpretation.
                    </p>

                    <span class="department-link">
                        Explore Department →
                    </span>

                </div>



                {{-- Law --}}

                <div class="department-card">

                    <div class="department-icon">
                        LAW
                    </div>

                    <h3>
                        Department of Law
                    </h3>

                    <p>
                        Legal education focused on professional
                        knowledge, justice, advocacy and responsible
                        legal practice.
                    </p>

                    <span class="department-link">
                        Explore Department →
                    </span>

                </div>



                {{-- Islamic Studies --}}

                <div class="department-card">

                    <div class="department-icon">
                        IS
                    </div>

                    <h3>
                        Department of Islamic Studies
                    </h3>

                    <p>
                        Academic study of Islamic knowledge,
                        civilization, values and contemporary issues.
                    </p>

                    <span class="department-link">
                        Explore Department →
                    </span>

                </div>


            </div>

        </div>

    </section>



    {{-- =====================================
         PROGRAMS
    ====================================== --}}

    <section class="school-section school-section-alt">

        <div class="school-container">

            <div class="section-heading center">

                <span class="section-label">
                    Study With Us
                </span>

                <h2>Academic Programs</h2>

                <div class="title-line"></div>

            </div>


            <div class="program-groups">


                {{-- Undergraduate --}}

                <div class="program-box">

                    <div class="program-box-header">
                        Undergraduate Programs
                    </div>

                    <ul class="program-list">

                        <li>
                            Bachelor of Business Administration
                            (BBA)
                        </li>

                        <li>
                            Bachelor of Arts (Hons.) in English
                        </li>

                        <li>
                            Bachelor of Laws
                        </li>

                        <li>
                            Bachelor of Arts (Hons.)
                            in Islamic Studies
                        </li>

                    </ul>

                </div>



                {{-- Graduate --}}

                <div class="program-box">

                    <div class="program-box-header">
                        Graduate Programs
                    </div>

                    <ul class="program-list">

                        <li>
                            Master of Business Administration
                            (MBA)
                        </li>

                        <li>
                            Executive Master of Business Administration
                            (EMBA)
                        </li>

                        <li>
                            Master of Laws
                        </li>

                        <li>
                            Master of Arts in English / ELT
                        </li>

                        <li>
                            Master of Arts in Islamic Studies
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================
         CTA
    ====================================== --}}

    <section class="school-cta">

        <h2>
            Begin Your Academic Journey at KYAU
        </h2>

        <p>
            Explore our academic programs and discover opportunities
            to build the knowledge and skills needed for your future.
        </p>

        <a href="{{ url('/#admission') }}"
           class="school-btn">
            Admission Information
        </a>

    </section>


</div>

@endsection