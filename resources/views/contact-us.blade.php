@extends('layouts.app')

@section('title', 'Contact Us | Khwaja Yunus Ali University')

@section('content')

<section class="contact-page">

    <div class="contact-container">

        {{-- Page Heading --}}
        <div class="contact-heading">
            <span class="contact-subtitle">GET IN TOUCH</span>

            <h1>Contact Us</h1>

            <div class="heading-line"></div>

            <p>
                Have a question or need more information?
                Get in touch with Khwaja Yunus Ali University.
            </p>
        </div>


        {{-- Contact Cards --}}
        <div class="contact-grid">

            {{-- Address --}}
            <div class="contact-card">

                <div class="contact-icon">
                    📍
                </div>

                <h3>University Address</h3>

                <p>
                    Khwaja Yunus Ali University
                </p>

                <p>
                    Enayetpur, Chauhali,<br>
                    Sirajganj-6751, Bangladesh
                </p>

            </div>


            {{-- Phone --}}
            <div class="contact-card">

                <div class="contact-icon">
                    ☎
                </div>

                <h3>Phone</h3>

                <p>
                    <a href="tel:+8801404461555">
                        +880 1404 461555
                    </a>
                </p>

                <p>
                    <a href="tel:+8801404461556">
                        +880 1404 461556
                    </a>
                </p>

                <p>
                    <a href="tel:+8802588834442">
                        +880-2-588834442-4
                    </a>
                </p>

            </div>


            {{-- Email --}}
            <div class="contact-card">

                <div class="contact-icon">
                    ✉
                </div>

                <h3>Email</h3>

                <p>
                    <a href="mailto:info@kyau.edu.bd">
                        info@kyau.edu.bd
                    </a>
                </p>

                <p class="small-text">
                    Send us your queries and our team will get back to you.
                </p>

            </div>


            {{-- Office Hours --}}
            <div class="contact-card">

                <div class="contact-icon">
                    ◷
                </div>

                <h3>Office Hours</h3>

                <p>
                    Sunday – Thursday
                </p>

                <p>
                    8:00 AM – 5:00 PM
                </p>

                <p class="small-text">
                    Friday – Saturday: Closed
                </p>

            </div>

        </div>


        {{-- Main Contact Information --}}
        <div class="contact-main">

            {{-- Left Side --}}
            <div class="contact-information">

                <span class="section-label">
                    CONTACT INFORMATION
                </span>

                <h2>
                    Khwaja Yunus Ali University
                </h2>

                <p class="contact-description">
                    For general enquiries, admission information,
                    academic matters or other university-related
                    information, please contact us through the
                    following channels.
                </p>


                <div class="information-row">

                    <div class="information-icon">
                        📍
                    </div>

                    <div>
                        <h4>Campus Address</h4>

                        <p>
                            Enayetpur, Chauhali,<br>
                            Sirajganj-6751, Bangladesh
                        </p>
                    </div>

                </div>


                <div class="information-row">

                    <div class="information-icon">
                        ☎
                    </div>

                    <div>
                        <h4>Mobile</h4>

                        <p>
                            <a href="tel:+8801404461555">
                                +880 1404 461555
                            </a>
                        </p>

                        <p>
                            <a href="tel:+8801404461556">
                                +880 1404 461556
                            </a>
                        </p>
                    </div>

                </div>


                <div class="information-row">

                    <div class="information-icon">
                        ☏
                    </div>

                    <div>
                        <h4>Telephone</h4>

                        <p>
                            +880-2-588834442-4
                        </p>
                    </div>

                </div>


                <div class="information-row">

                    <div class="information-icon">
                        ✉
                    </div>

                    <div>
                        <h4>Email</h4>

                        <p>
                            <a href="mailto:info@kyau.edu.bd">
                                info@kyau.edu.bd
                            </a>
                        </p>
                    </div>

                </div>


                <div class="information-row">

                    <div class="information-icon">
                        📠
                    </div>

                    <div>
                        <h4>Fax</h4>

                        <p>
                            +880-2-588834441
                        </p>
                    </div>

                </div>

            </div>


            {{-- Right Side / Map --}}
            <div class="contact-map">

                <iframe
                    src="https://www.google.com/maps?q=Khwaja+Yunus+Ali+University,+Enayetpur,+Sirajganj,+Bangladesh&output=embed"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Khwaja Yunus Ali University Location">
                </iframe>

            </div>

        </div>

    </div>

</section>


<style>

    /* =========================================
       CONTACT PAGE
    ========================================== */

    .contact-page {
        background: #f8faf9;
        padding: 60px 20px 80px;
    }

    .contact-container {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
    }


    /* =========================================
       HEADING
    ========================================== */

    .contact-heading {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 45px;
    }

    .contact-subtitle {
        display: block;
        color: #0f6b46;
        font-size: 13px;
        font-weight: 800;
        letter-spacing: 2px;
        margin-bottom: 8px;
    }

    .contact-heading h1 {
        margin: 0;
        color: #17231e;
        font-size: 38px;
        font-weight: 800;
    }

    .heading-line {
        width: 65px;
        height: 4px;
        margin: 15px auto 18px;
        border-radius: 5px;
        background: #e8552e;
    }

    .contact-heading p {
        margin: 0;
        color: #65716b;
        font-size: 16px;
        line-height: 1.7;
    }


    /* =========================================
       CONTACT CARDS
    ========================================== */

    .contact-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 45px;
    }

    .contact-card {
        background: #ffffff;
        border: 1px solid #e2eae6;
        border-radius: 14px;
        padding: 28px 20px;
        text-align: center;

        box-shadow:
            0 5px 20px rgba(15, 107, 70, 0.06);

        transition:
            transform .25s ease,
            box-shadow .25s ease,
            border-color .25s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        border-color: #b8d7c7;

        box-shadow:
            0 12px 30px rgba(15, 107, 70, 0.12);
    }

    .contact-icon {
        width: 55px;
        height: 55px;

        margin: 0 auto 18px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #eef8f3;
        color: #0f6b46;

        font-size: 23px;
    }

    .contact-card h3 {
        margin: 0 0 15px;

        color: #17231e;

        font-size: 18px;
        font-weight: 750;
    }

    .contact-card p {
        margin: 5px 0;

        color: #5f6b65;

        font-size: 14px;
        line-height: 1.6;
    }

    .contact-card a {
        color: #0f6b46;
        text-decoration: none;
        font-weight: 600;
    }

    .contact-card a:hover {
        text-decoration: underline;
    }

    .small-text {
        font-size: 13px !important;
    }


    /* =========================================
       MAIN CONTACT SECTION
    ========================================== */

    .contact-main {
        display: grid;
        grid-template-columns: 1fr 1.1fr;

        background: #ffffff;

        border: 1px solid #e2eae6;
        border-radius: 16px;

        overflow: hidden;

        box-shadow:
            0 8px 35px rgba(15, 107, 70, 0.08);
    }


    /* =========================================
       CONTACT INFORMATION
    ========================================== */

    .contact-information {
        padding: 45px;
    }

    .section-label {
        display: block;

        margin-bottom: 8px;

        color: #0f6b46;

        font-size: 12px;
        font-weight: 800;

        letter-spacing: 1.5px;
    }

    .contact-information h2 {
        margin: 0 0 15px;

        color: #17231e;

        font-size: 28px;
        font-weight: 800;
    }

    .contact-description {
        margin-bottom: 30px;

        color: #68736e;

        font-size: 15px;
        line-height: 1.7;
    }


    /* Information Rows */

    .information-row {
        display: flex;
        align-items: flex-start;

        gap: 15px;

        padding: 17px 0;

        border-bottom: 1px solid #edf1ef;
    }

    .information-row:last-child {
        border-bottom: 0;
    }

    .information-icon {
        flex: 0 0 42px;

        width: 42px;
        height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #eef8f3;

        border-radius: 9px;

        font-size: 18px;
    }

    .information-row h4 {
        margin: 0 0 5px;

        color: #24352d;

        font-size: 15px;
        font-weight: 750;
    }

    .information-row p {
        margin: 2px 0;

        color: #66716c;

        font-size: 14px;
        line-height: 1.6;
    }

    .information-row a {
        color: #0f6b46;
        text-decoration: none;
    }

    .information-row a:hover {
        text-decoration: underline;
    }


    /* =========================================
       MAP
    ========================================== */

    .contact-map {
        min-height: 600px;
        background: #e9efec;
    }

    .contact-map iframe {
        display: block;
        width: 100%;
        height: 100%;
        min-height: 600px;
    }


    /* =========================================
       TABLET
    ========================================== */

    @media (max-width: 992px) {

        .contact-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .contact-main {
            grid-template-columns: 1fr;
        }

        .contact-map {
            min-height: 420px;
        }

        .contact-map iframe {
            min-height: 420px;
        }

    }


    /* =========================================
       MOBILE
    ========================================== */

    @media (max-width: 576px) {

        .contact-page {
            padding: 35px 12px 50px;
        }

        .contact-heading {
            margin-bottom: 30px;
        }

        .contact-heading h1 {
            font-size: 29px;
        }

        .contact-heading p {
            font-size: 14px;
        }

        .contact-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .contact-card {
            padding: 23px 15px;
        }

        .contact-information {
            padding: 25px 18px;
        }

        .contact-information h2 {
            font-size: 23px;
        }

        .information-row {
            gap: 12px;
        }

        .contact-map,
        .contact-map iframe {
            min-height: 330px;
        }

    }

</style>

@endsection