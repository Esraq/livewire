@extends('layouts.app')

@section('title', 'Postgraduate Programmes | Khwaja Yunus Ali University')

@section('content')

<style>

    .pg-page {
        background: #f6f8f7;
        padding-bottom: 60px;
    }

    .pg-hero {
        padding: 58px 15px;

        background:
            linear-gradient(
                135deg,
                #0f6b46 0%,
                #095236 100%
            );

        text-align: center;
        color: #fff;
    }

    .pg-hero h1 {
        margin: 0 0 10px;

        font-size: 36px;
        font-weight: 700;
    }

    .pg-hero p {
        max-width: 700px;

        margin: 0 auto;

        color: #d7eee3;

        font-size: 16px;
        line-height: 1.7;
    }

    .pg-container {
        width: 100%;
        max-width: 1150px;

        margin: 0 auto;
        padding: 45px 15px 0;
    }

    .pg-heading {
        margin-bottom: 25px;
    }

    .pg-heading h2 {
        margin: 0 0 8px;

        color: #1d2923;

        font-size: 27px;
        font-weight: 700;
    }

    .pg-heading-line {
        width: 65px;
        height: 4px;

        background: #e8552e;

        border-radius: 4px;
    }

    .pg-intro {
        padding: 25px;
        margin-bottom: 40px;

        background: #ffffff;

        border: 1px solid #e0e6e3;
        border-radius: 8px;

        color: #58625d;

        font-size: 15px;
        line-height: 1.8;
    }

    .pg-grid {
        display: grid;

        grid-template-columns: repeat(2, minmax(0, 1fr));

        gap: 20px;
    }

    .pg-card {
        position: relative;

        padding: 25px 22px 25px 28px;

        background: #fff;

        border: 1px solid #dfe6e2;
        border-radius: 8px;

        box-shadow: 0 4px 18px rgba(0,0,0,.04);

        overflow: hidden;

        transition:
            transform .2s ease,
            box-shadow .2s ease;
    }

    .pg-card::before {
        content: '';

        position: absolute;

        top: 0;
        bottom: 0;
        left: 0;

        width: 5px;

        background: #0f6b46;
    }

    .pg-card:hover {
        transform: translateY(-3px);

        box-shadow: 0 8px 24px rgba(0,0,0,.08);
    }

    .pg-number {
        margin-bottom: 12px;

        color: #e8552e;

        font-size: 13px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: .7px;
    }

    .pg-card h3 {
        margin: 0 0 10px;

        color: #1f2d26;

        font-size: 19px;
        line-height: 1.5;
    }

    .pg-card p {
        margin: 0;

        color: #67716c;

        font-size: 14px;
        line-height: 1.7;
    }


    /* APPLICATION */

    .application-section {
        margin-top: 45px;

        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 25px;
    }

    .application-box {
        padding: 28px;

        background: #fff;

        border: 1px solid #e0e6e3;
        border-radius: 8px;
    }

    .application-box h3 {
        margin: 0 0 15px;

        color: #0f6b46;

        font-size: 21px;
    }

    .application-box p {
        margin: 0;

        color: #626c67;

        font-size: 14px;
        line-height: 1.8;
    }

    .application-box ul {
        margin: 0;
        padding-left: 20px;
    }

    .application-box li {
        margin-bottom: 9px;

        color: #626c67;

        font-size: 14px;
        line-height: 1.6;
    }


    /* CTA */

    .pg-cta {
        margin-top: 40px;

        padding: 35px 25px;

        background: #0f6b46;

        border-radius: 10px;

        text-align: center;

        color: #fff;
    }

    .pg-cta h2 {
        margin: 0 0 10px;

        font-size: 26px;
    }

    .pg-cta p {
        max-width: 700px;

        margin: 0 auto 22px;

        color: #d9eee5;

        line-height: 1.7;
    }

    .pg-btn {
        display: inline-block;

        padding: 11px 22px;

        background: #e8552e;

        border-radius: 5px;

        color: #fff !important;

        text-decoration: none !important;

        font-size: 14px;
        font-weight: 600;
    }

    .pg-btn:hover {
        background: #d44723;
    }


    @media (max-width: 768px) {

        .pg-hero {
            padding: 40px 15px;
        }

        .pg-hero h1 {
            font-size: 28px;
        }

        .pg-container {
            padding-top: 30px;
        }

        .pg-grid,
        .application-section {
            grid-template-columns: 1fr;
        }

        .pg-heading h2 {
            font-size: 23px;
        }

    }

</style>


<div class="pg-page">


    {{-- HERO --}}

    <section class="pg-hero">

        <h1>Postgraduate Programmes</h1>

        <p>
            Advance your academic and professional knowledge through
            postgraduate study at Khwaja Yunus Ali University.
        </p>

    </section>


    <div class="pg-container">


        {{-- INTRO --}}

        <div class="pg-heading">

            <h2>Graduate & Postgraduate Study</h2>

            <div class="pg-heading-line"></div>

        </div>


        <div class="pg-intro">

            Khwaja Yunus Ali University offers graduate programmes
            for students seeking advanced academic knowledge,
            professional development and specialized study in their
            chosen disciplines.

        </div>



        {{-- PROGRAMS --}}

        <div class="pg-heading">

            <h2>Available Programmes</h2>

            <div class="pg-heading-line"></div>

        </div>


        <div class="pg-grid">


            {{-- MBA --}}

            <div class="pg-card">

                <div class="pg-number">
                    Programme 01
                </div>

                <h3>
                    Master of Business Administration
                </h3>

                <p>
                    Advanced studies in business administration,
                    management and organizational leadership.
                </p>

            </div>



            {{-- MECHATRONICS --}}

            <div class="pg-card">

                <div class="pg-number">
                    Programme 02
                </div>

                <h3>
                    Master of Science in Mechatronic and
                    Micro-Mechatronics System Engineering
                </h3>

                <p>
                    Graduate-level study focused on advanced
                    mechatronic systems and engineering technologies.
                </p>

            </div>



            {{-- LAW --}}

            <div class="pg-card">

                <div class="pg-number">
                    Programme 03
                </div>

                <h3>
                    Master of Laws
                </h3>

                <p>
                    Advanced legal education designed for deeper
                    study and professional development in law.
                </p>

            </div>



            {{-- ENGLISH --}}

            <div class="pg-card">

                <div class="pg-number">
                    Programme 04
                </div>

                <h3>
                    Master of Arts in English ELT
                </h3>

                <p>
                    Graduate study in English with emphasis on
                    English Language Teaching and related academic areas.
                </p>

            </div>



            {{-- ISLAMIC STUDIES --}}

            <div class="pg-card">

                <div class="pg-number">
                    Programme 05
                </div>

                <h3>
                    Master of Arts in Islamic Studies (Preli)
                </h3>

                <p>
                    Advanced academic study within the discipline
                    of Islamic Studies.
                </p>

            </div>


        </div>



        {{-- APPLICATION INFO --}}

        <div class="application-section">


            <div class="application-box">

                <h3>How to Apply</h3>

                <p>
                    Applicants may apply through the university's online
                    application system or obtain an application form from
                    the KYAU Admission Office.
                </p>

            </div>


            <div class="application-box">

                <h3>Required Documents</h3>

                <ul>
                    <li>Academic certificates and mark sheets/transcripts</li>
                    <li>Testimonials</li>
                    <li>Passport-size photographs</li>
                    <li>Birth certificate or NID copy</li>
                    <li>Guardian's NID copy where required</li>
                </ul>

            </div>


        </div>



        {{-- CTA --}}

        <div class="pg-cta">

            <h2>Interested in Postgraduate Study?</h2>

            <p>
                Programme eligibility, tuition fees and admission
                requirements may vary. Contact the KYAU Admission Office
                for current programme-specific information.
            </p>

            <a
                href="{{ url('/admission-information') }}"
                class="pg-btn"
            >
                Admission Information
            </a>

        </div>


    </div>

</div>

@endsection