@extends('layouts.app')

@section('title', 'School of Bio-Medical and Life Science | Khwaja Yunus Ali University')

@section('content')

<style>

    /* ==========================================
       GLOBAL SCHOOL PAGE
    ========================================== */

    .biomedical-page {
        background: #ffffff;
        color: #24312b;
    }

    .bio-container {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
    }


    /* ==========================================
       HERO
    ========================================== */

    .bio-hero {
        position: relative;
        overflow: hidden;

        padding: 95px 20px;

        background:
            linear-gradient(
                135deg,
                rgba(6, 71, 48, .97),
                rgba(15, 107, 70, .92)
            );

        color: #ffffff;
    }

    .bio-hero::before {
        content: '';
        position: absolute;

        width: 420px;
        height: 420px;

        top: -190px;
        right: -100px;

        border-radius: 50%;

        background: rgba(255,255,255,.06);
    }

    .bio-hero::after {
        content: '';
        position: absolute;

        width: 230px;
        height: 230px;

        bottom: -130px;
        left: -80px;

        border-radius: 50%;

        background: rgba(255,255,255,.05);
    }

    .bio-hero-content {
        position: relative;
        z-index: 2;

        max-width: 900px;

        margin: 0 auto;

        text-align: center;
    }

    .bio-eyebrow {
        display: inline-block;

        margin-bottom: 15px;

        font-size: 13px;
        font-weight: 800;

        letter-spacing: 2px;
        text-transform: uppercase;

        color: #cce8da;
    }

    .bio-hero h1 {
        margin: 0 0 20px;

        font-size: 45px;
        font-weight: 800;

        line-height: 1.2;
    }

    .bio-hero p {
        max-width: 780px;

        margin: 0 auto;

        font-size: 17px;
        line-height: 1.8;

        color: rgba(255,255,255,.9);
    }


    /* ==========================================
       COMMON SECTION
    ========================================== */

    .bio-section {
        padding: 70px 0;
    }

    .bio-section-light {
        background: #f7faf8;
    }

    .bio-heading {
        margin-bottom: 35px;
    }

    .bio-heading.center {
        text-align: center;
    }

    .bio-label {
        display: block;

        margin-bottom: 8px;

        color: #0f6b46;

        font-size: 12px;
        font-weight: 800;

        letter-spacing: 1.7px;

        text-transform: uppercase;
    }

    .bio-heading h2 {
        margin: 0;

        font-size: 32px;
        font-weight: 800;

        color: #17251f;
    }

    .bio-title-line {
        width: 65px;
        height: 3px;

        margin-top: 13px;

        background: #e8552e;

        border-radius: 4px;
    }

    .bio-heading.center .bio-title-line {
        margin-left: auto;
        margin-right: auto;
    }


    /* ==========================================
       OVERVIEW
    ========================================== */

    .bio-overview-grid {
        display: grid;

        grid-template-columns: 1.35fr .65fr;

        gap: 50px;

        align-items: start;
    }

    .bio-overview-text p {
        margin: 0 0 18px;

        font-size: 16px;
        line-height: 1.85;

        color: #5f6b65;
    }


    /* Quick facts */

    .bio-facts {
        padding: 30px;

        border-radius: 15px;

        background:
            linear-gradient(
                145deg,
                #095236,
                #0f6b46
            );

        color: #ffffff;

        box-shadow:
            0 12px 30px rgba(15,107,70,.15);
    }

    .bio-facts h3 {
        margin: 0 0 22px;

        font-size: 21px;
        font-weight: 750;
    }

    .bio-fact {
        padding: 14px 0;

        border-bottom:
            1px solid rgba(255,255,255,.16);
    }

    .bio-fact:last-child {
        border-bottom: 0;
    }

    .bio-fact span {
        display: block;

        margin-bottom: 4px;

        color: #b9ddcb;

        font-size: 11px;
        font-weight: 700;

        letter-spacing: 1px;

        text-transform: uppercase;
    }

    .bio-fact strong {
        font-size: 15px;
        font-weight: 600;
    }


    /* ==========================================
       DEPARTMENTS
    ========================================== */

    .bio-department-grid {
        display: grid;

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        gap: 25px;
    }

    .bio-department-card {
        position: relative;

        display: flex;
        flex-direction: column;

        min-height: 290px;

        padding: 32px;

        background: #ffffff;

        border: 1px solid #e1e9e5;
        border-radius: 14px;

        overflow: hidden;

        text-decoration: none;

        transition:
            transform .25s ease,
            border-color .25s ease,
            box-shadow .25s ease;
    }

    .bio-department-card::before {
        content: '';

        position: absolute;

        left: 0;
        top: 0;

        width: 100%;
        height: 4px;

        background: #0f6b46;
    }

    .bio-department-card:hover {
        transform: translateY(-6px);

        border-color: #b8d7c7;

        box-shadow:
            0 14px 32px rgba(15,107,70,.11);
    }

    .bio-department-icon {
        width: 58px;
        height: 58px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 22px;

        border-radius: 12px;

        background: #eef8f3;

        color: #0f6b46;

        font-size: 18px;
        font-weight: 800;
    }

    .bio-department-card h3 {
        margin: 0 0 12px;

        color: #1f3028;

        font-size: 20px;
        font-weight: 750;

        line-height: 1.4;
    }

    .bio-department-card p {
        margin: 0 0 22px;

        color: #68746e;

        font-size: 14px;
        line-height: 1.75;
    }

    .bio-card-link {
        margin-top: auto;

        color: #0f6b46;

        font-size: 13px;
        font-weight: 700;
    }


    /* ==========================================
       PROGRAM SECTION
    ========================================== */

    .bio-program-grid {
        display: grid;

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        gap: 22px;
    }

    .bio-program-card {
        padding: 28px;

        background: #ffffff;

        border: 1px solid #e2e9e5;
        border-radius: 12px;

        transition:
            transform .25s ease,
            box-shadow .25s ease;
    }

    .bio-program-card:hover {
        transform: translateY(-4px);

        box-shadow:
            0 10px 25px rgba(15,107,70,.09);
    }

    .bio-program-number {
        margin-bottom: 15px;

        color: #e8552e;

        font-size: 13px;
        font-weight: 800;

        letter-spacing: 1px;
    }

    .bio-program-card h3 {
        margin: 0 0 12px;

        color: #203029;

        font-size: 18px;
        line-height: 1.5;
    }

    .bio-program-card p {
        margin: 0;

        color: #6a756f;

        font-size: 14px;
        line-height: 1.7;
    }


    /* ==========================================
       RESEARCH / LAB
    ========================================== */

    .bio-research-grid {
        display: grid;

        grid-template-columns: .8fr 1.2fr;

        gap: 45px;

        align-items: center;
    }

    .bio-research-highlight {
        padding: 40px;

        border-radius: 16px;

        background:
            linear-gradient(
                135deg,
                #0f6b46,
                #137b52
            );

        color: #ffffff;
    }

    .bio-research-highlight span {
        display: block;

        margin-bottom: 10px;

        color: #c7e6d6;

        font-size: 12px;
        font-weight: 800;

        letter-spacing: 1.5px;

        text-transform: uppercase;
    }

    .bio-research-highlight h2 {
        margin: 0 0 17px;

        font-size: 28px;
        font-weight: 800;
    }

    .bio-research-highlight p {
        margin: 0;

        color: rgba(255,255,255,.88);

        line-height: 1.8;

        font-size: 15px;
    }


    /* Features */

    .bio-feature-list {
        display: grid;

        grid-template-columns:
            repeat(2, minmax(0,1fr));

        gap: 18px;
    }

    .bio-feature {
        padding: 23px;

        border: 1px solid #e2e9e5;
        border-radius: 11px;

        background: #ffffff;
    }

    .bio-feature-number {
        display: flex;

        width: 38px;
        height: 38px;

        align-items: center;
        justify-content: center;

        margin-bottom: 13px;

        border-radius: 8px;

        background: #eef8f3;

        color: #0f6b46;

        font-weight: 800;
    }

    .bio-feature h4 {
        margin: 0 0 8px;

        color: #25352e;

        font-size: 16px;
        font-weight: 700;
    }

    .bio-feature p {
        margin: 0;

        color: #6c7771;

        font-size: 13px;
        line-height: 1.65;
    }


    /* ==========================================
       VISION / EDUCATIONAL PURPOSE
    ========================================== */

    .bio-purpose-grid {
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 25px;
    }

    .bio-purpose-card {
        padding: 35px;

        background: #ffffff;

        border: 1px solid #e1e9e5;
        border-radius: 14px;

        box-shadow:
            0 5px 20px rgba(15,107,70,.05);
    }

    .bio-purpose-card h3 {
        margin: 0 0 15px;

        color: #1f3028;

        font-size: 22px;
        font-weight: 750;
    }

    .bio-purpose-card p {
        margin: 0;

        color: #65716b;

        font-size: 15px;
        line-height: 1.8;
    }


    /* ==========================================
       CTA
    ========================================== */

    .bio-cta {
        position: relative;

        padding: 70px 20px;

        overflow: hidden;

        background:
            linear-gradient(
                135deg,
                #073f2b,
                #0f6b46
            );

        text-align: center;

        color: #ffffff;
    }

    .bio-cta h2 {
        margin: 0 0 15px;

        font-size: 31px;
        font-weight: 800;
    }

    .bio-cta p {
        max-width: 680px;

        margin: 0 auto 27px;

        color: rgba(255,255,255,.86);

        font-size: 15px;
        line-height: 1.8;
    }

    .bio-cta-buttons {
        display: flex;

        justify-content: center;

        gap: 12px;

        flex-wrap: wrap;
    }

    .bio-btn {
        display: inline-block;

        padding: 12px 25px;

        border-radius: 7px;

        text-decoration: none;

        font-size: 14px;
        font-weight: 700;

        transition:
            transform .2s ease,
            background .2s ease;
    }

    .bio-btn-primary {
        background: #e8552e;
        color: #ffffff;
    }

    .bio-btn-primary:hover {
        background: #d84723;
        color: #ffffff;

        transform: translateY(-2px);
    }

    .bio-btn-outline {
        border: 1px solid rgba(255,255,255,.55);

        color: #ffffff;

        background: transparent;
    }

    .bio-btn-outline:hover {
        background: #ffffff;

        color: #0f6b46;
    }


    /* ==========================================
       TABLET
    ========================================== */

    @media (max-width: 991px) {

        .bio-hero {
            padding: 75px 20px;
        }

        .bio-hero h1 {
            font-size: 37px;
        }

        .bio-overview-grid,
        .bio-research-grid {
            grid-template-columns: 1fr;
        }

        .bio-department-grid,
        .bio-program-grid {
            grid-template-columns:
                repeat(2, minmax(0,1fr));
        }

    }


    /* ==========================================
       MOBILE
    ========================================== */

    @media (max-width: 650px) {

        .bio-container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .bio-hero {
            padding: 52px 15px;
        }

        .bio-hero h1 {
            font-size: 29px;
        }

        .bio-hero p {
            font-size: 15px;
        }

        .bio-section {
            padding: 45px 0;
        }

        .bio-heading h2 {
            font-size: 26px;
        }

        .bio-department-grid,
        .bio-program-grid,
        .bio-purpose-grid,
        .bio-feature-list {
            grid-template-columns: 1fr;
        }

        .bio-department-card {
            min-height: auto;
            padding: 25px;
        }

        .bio-facts,
        .bio-research-highlight {
            padding: 25px;
        }

        .bio-purpose-card {
            padding: 25px;
        }

        .bio-cta {
            padding: 50px 15px;
        }

        .bio-cta h2 {
            font-size: 25px;
        }

        .bio-cta-buttons {
            flex-direction: column;
            align-items: center;
        }

        .bio-btn {
            width: 100%;
            max-width: 280px;
        }

    }

</style>


<div class="biomedical-page">


    {{-- ======================================
         HERO
    ======================================= --}}

    <section class="bio-hero">

        <div class="bio-hero-content">

            <span class="bio-eyebrow">
                Khwaja Yunus Ali University
            </span>

            <h1>
                School of Bio-Medical and Life Science
            </h1>

            <p>
                Advancing education, laboratory learning, research
                and innovation across pharmaceutical, microbiological,
                biochemical and biotechnological sciences.
            </p>

        </div>

    </section>



    {{-- ======================================
         OVERVIEW
    ======================================= --}}

    <section class="bio-section">

        <div class="bio-container">

            <div class="bio-overview-grid">


                <div class="bio-overview-text">

                    <div class="bio-heading">

                        <span class="bio-label">
                            About the School
                        </span>

                        <h2>
                            Exploring Life Through Science
                        </h2>

                        <div class="bio-title-line"></div>

                    </div>

                    <p>
                        The School of Bio-Medical and Life Science
                        brings together disciplines that explore
                        human health, microorganisms, biological
                        processes, medicines and biotechnology.
                    </p>

                    <p>
                        The School includes the Departments of
                        Pharmacy, Microbiology, and Biochemistry
                        & Biotechnology, combining academic study
                        with laboratory-based practical and research
                        experience.
                    </p>

                    <p>
                        Through scientific education and laboratory
                        learning, students are prepared for opportunities
                        in healthcare, pharmaceutical industries,
                        biotechnology, research, academia and related
                        life-science sectors.
                    </p>

                </div>


                <aside class="bio-facts">

                    <h3>
                        School at a Glance
                    </h3>

                    <div class="bio-fact">

                        <span>
                            University
                        </span>

                        <strong>
                            Khwaja Yunus Ali University
                        </strong>

                    </div>

                    <div class="bio-fact">

                        <span>
                            Academic Departments
                        </span>

                        <strong>
                            3 Departments
                        </strong>

                    </div>

                    <div class="bio-fact">

                        <span>
                            Focus
                        </span>

                        <strong>
                            Education, Laboratory & Research
                        </strong>

                    </div>

                    <div class="bio-fact">

                        <span>
                            Campus
                        </span>

                        <strong>
                            Enayetpur, Sirajganj
                        </strong>

                    </div>

                </aside>

            </div>

        </div>

    </section>



    {{-- ======================================
         DEPARTMENTS
    ======================================= --}}

    <section class="bio-section bio-section-light">

        <div class="bio-container">

            <div class="bio-heading center">

                <span class="bio-label">
                    Academic Units
                </span>

                <h2>
                    Our Departments
                </h2>

                <div class="bio-title-line"></div>

            </div>


            <div class="bio-department-grid">


                {{-- PHARMACY --}}

                <a
                    href="{{ url('/academic/pharmacy') }}"
                    class="bio-department-card"
                >

                    <div class="bio-department-icon">
                        PH
                    </div>

                    <h3>
                        Department of Pharmacy
                    </h3>

                    <p>
                        Professional pharmaceutical education with
                        emphasis on patient-centered care, medicines,
                        pharmaceutical sciences, industry and research.
                    </p>

                    <span class="bio-card-link">
                        Explore Pharmacy →
                    </span>

                </a>



                {{-- MICROBIOLOGY --}}

                <a
                    href="{{ url('/academic/microbiology') }}"
                    class="bio-department-card"
                >

                    <div class="bio-department-icon">
                        MB
                    </div>

                    <h3>
                        Department of Microbiology
                    </h3>

                    <p>
                        Study of microorganisms and their roles in
                        health, disease, biotechnology, industry,
                        food science and the environment.
                    </p>

                    <span class="bio-card-link">
                        Explore Microbiology →
                    </span>

                </a>



                {{-- BIOCHEMISTRY --}}

                <a
                    href="{{ url('/academic/biochemistry-biotechnology') }}"
                    class="bio-department-card"
                >

                    <div class="bio-department-icon">
                        BCBT
                    </div>

                    <h3>
                        Department of Biochemistry & Biotechnology
                    </h3>

                    <p>
                        Exploring molecular biology, biochemical
                        processes and biotechnology through modern
                        scientific education and research.
                    </p>

                    <span class="bio-card-link">
                        Explore Biochemistry & Biotechnology →
                    </span>

                </a>


            </div>

        </div>

    </section>



    {{-- ======================================
         PROGRAMS
    ======================================= --}}

    <section class="bio-section">

        <div class="bio-container">

            <div class="bio-heading center">

                <span class="bio-label">
                    Study With Us
                </span>

                <h2>
                    Undergraduate Programs
                </h2>

                <div class="bio-title-line"></div>

            </div>


            <div class="bio-program-grid">

                <div class="bio-program-card">

                    <div class="bio-program-number">
                        PROGRAM 01
                    </div>

                    <h3>
                        Bachelor of Science in Pharmacy
                    </h3>

                    <p>
                        A professional undergraduate program covering
                        pharmaceutical science, clinical pharmacy,
                        pharmacology, pharmaceutical technology and
                        related areas.
                    </p>

                </div>


                <div class="bio-program-card">

                    <div class="bio-program-number">
                        PROGRAM 02
                    </div>

                    <h3>
                        Bachelor of Science in Microbiology
                    </h3>

                    <p>
                        Undergraduate study covering microorganisms,
                        healthcare, industrial microbiology,
                        biotechnology and research.
                    </p>

                </div>


                <div class="bio-program-card">

                    <div class="bio-program-number">
                        PROGRAM 03
                    </div>

                    <h3>
                        Bachelor of Science in Biochemistry & Biotechnology
                    </h3>

                    <p>
                        Study of biochemical sciences and modern
                        biotechnology with laboratory and research-based
                        learning.
                    </p>

                </div>

            </div>

        </div>

    </section>



    {{-- ======================================
         LAB & RESEARCH
    ======================================= --}}

    <section class="bio-section bio-section-light">

        <div class="bio-container">

            <div class="bio-research-grid">


                <div class="bio-research-highlight">

                    <span>
                        Practical Learning
                    </span>

                    <h2>
                        Laboratories & Research
                    </h2>

                    <p>
                        Laboratory-based learning is an important
                        component of biomedical and life-science
                        education. KYAU maintains dedicated laboratory
                        facilities for Pharmacy, Microbiology and
                        Biochemistry & Biotechnology to support
                        practical teaching and research activities.
                    </p>

                </div>


                <div class="bio-feature-list">

                    <div class="bio-feature">

                        <div class="bio-feature-number">
                            01
                        </div>

                        <h4>
                            Practical Learning
                        </h4>

                        <p>
                            Laboratory sessions connect scientific
                            theory with practical application.
                        </p>

                    </div>


                    <div class="bio-feature">

                        <div class="bio-feature-number">
                            02
                        </div>

                        <h4>
                            Research Experience
                        </h4>

                        <p>
                            Students can develop scientific thinking,
                            investigation and research skills.
                        </p>

                    </div>


                    <div class="bio-feature">

                        <div class="bio-feature-number">
                            03
                        </div>

                        <h4>
                            Scientific Skills
                        </h4>

                        <p>
                            Programs emphasize analytical,
                            experimental and problem-solving abilities.
                        </p>

                    </div>


                    <div class="bio-feature">

                        <div class="bio-feature-number">
                            04
                        </div>

                        <h4>
                            Career Preparation
                        </h4>

                        <p>
                            Academic and practical training supports
                            preparation for scientific and professional
                            careers.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- ======================================
         PURPOSE
    ======================================= --}}

    <section class="bio-section">

        <div class="bio-container">

            <div class="bio-heading center">

                <span class="bio-label">
                    Academic Direction
                </span>

                <h2>
                    Education & Scientific Development
                </h2>

                <div class="bio-title-line"></div>

            </div>


            <div class="bio-purpose-grid">

                <div class="bio-purpose-card">

                    <h3>
                        Scientific Education
                    </h3>

                    <p>
                        The School emphasizes a combination of
                        theoretical understanding, practical laboratory
                        skills, scientific reasoning and ethical
                        responsibility in biomedical and life sciences.
                    </p>

                </div>


                <div class="bio-purpose-card">

                    <h3>
                        Research & Innovation
                    </h3>

                    <p>
                        Students and faculty are encouraged to engage
                        with research, scientific inquiry and emerging
                        developments in biomedical science,
                        biotechnology, microbiology and pharmaceutical
                        sciences.
                    </p>

                </div>

            </div>

        </div>

    </section>



    {{-- ======================================
         CTA
    ======================================= --}}

    <section class="bio-cta">

        <h2>
            Build Your Future in Bio-Medical & Life Science
        </h2>

        <p>
            Explore programs in Pharmacy, Microbiology and
            Biochemistry & Biotechnology and begin your scientific
            journey at Khwaja Yunus Ali University.
        </p>

        <div class="bio-cta-buttons">

            <a
                href="{{ url('/#admission') }}"
                class="bio-btn bio-btn-primary"
            >
                Admission Information
            </a>

            <a
                href="{{ route('contact.us') }}"
                class="bio-btn bio-btn-outline"
            >
                Contact KYAU
            </a>

        </div>

    </section>


</div>

@endsection