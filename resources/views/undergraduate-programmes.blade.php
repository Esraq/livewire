@extends('layouts.app')

@section('title', 'Undergraduate Programmes | Khwaja Yunus Ali University')

@section('content')

<style>
    .program-page {
        background: #f6f8f7;
        padding-bottom: 60px;
    }

    .program-hero {
        background: linear-gradient(135deg, #0f6b46, #095236);
        padding: 55px 15px;
        color: #fff;
        text-align: center;
    }

    .program-hero h1 {
        margin: 0 0 10px;
        font-size: 36px;
        font-weight: 700;
    }

    .program-hero p {
        margin: 0 auto;
        max-width: 700px;
        color: #d8eee4;
        font-size: 16px;
        line-height: 1.7;
    }

    .program-container {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        padding: 45px 15px 0;
    }

    .section-header {
        margin-bottom: 25px;
    }

    .section-header h2 {
        margin: 0 0 8px;
        color: #1d2923;
        font-size: 27px;
        font-weight: 700;
    }

    .section-line {
        width: 65px;
        height: 4px;
        background: #e8552e;
        border-radius: 5px;
    }

    .intro-box {
        background: #fff;
        border: 1px solid #e0e6e3;
        border-radius: 8px;
        padding: 25px;
        margin-bottom: 35px;
        line-height: 1.8;
        color: #58635d;
    }

    .criteria-box {
        background: #fff;
        border: 1px solid #e0e6e3;
        border-radius: 8px;
        padding: 28px;
        margin-bottom: 40px;
    }

    .criteria-box ol {
        margin: 0;
        padding-left: 22px;
    }

    .criteria-box li {
        margin-bottom: 14px;
        color: #555f59;
        line-height: 1.8;
    }

    .criteria-box li:last-child {
        margin-bottom: 0;
    }

    .program-table-wrapper {
        width: 100%;
        overflow-x: auto;
        background: #fff;
        border-radius: 8px;
        border: 1px solid #dde4e0;
        box-shadow: 0 4px 18px rgba(0,0,0,.04);
    }

    .program-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 950px;
    }

    .program-table th {
        background: #0f6b46;
        color: #fff;
        padding: 15px 13px;
        text-align: left;
        font-size: 14px;
        font-weight: 600;
        border: 1px solid #328263;
    }

    .program-table td {
        padding: 14px 13px;
        border: 1px solid #e2e7e4;
        color: #515b56;
        font-size: 14px;
        line-height: 1.5;
    }

    .program-table tbody tr:nth-child(even) {
        background: #f8faf9;
    }

    .program-table tbody tr:hover {
        background: #eef7f3;
    }

    .program-name {
        color: #0f6b46;
        font-weight: 600;
    }

    .admission-cta {
        margin-top: 40px;
        background: #0f6b46;
        border-radius: 10px;
        padding: 35px 25px;
        text-align: center;
        color: #fff;
    }

    .admission-cta h2 {
        margin: 0 0 10px;
        font-size: 26px;
    }

    .admission-cta p {
        max-width: 700px;
        margin: 0 auto 22px;
        line-height: 1.7;
        color: #d9eee5;
    }

    .admission-btn {
        display: inline-block;
        padding: 11px 22px;
        background: #e8552e;
        color: #fff !important;
        border-radius: 5px;
        text-decoration: none !important;
        font-weight: 600;
    }

    .admission-btn:hover {
        background: #d44723;
    }

    @media (max-width: 768px) {
        .program-hero {
            padding: 40px 15px;
        }

        .program-hero h1 {
            font-size: 28px;
        }

        .program-container {
            padding-top: 30px;
        }

        .section-header h2 {
            font-size: 23px;
        }
    }
</style>


<div class="program-page">

    {{-- HERO --}}
    <section class="program-hero">

        <h1>Undergraduate Programmes</h1>

        <p>
            Explore undergraduate academic programmes offered by
            Khwaja Yunus Ali University.
        </p>

    </section>


    <div class="program-container">

        {{-- INTRODUCTION --}}
        <div class="section-header">
            <h2>Undergraduate Study at KYAU</h2>
            <div class="section-line"></div>
        </div>

        <div class="intro-box">
            Khwaja Yunus Ali University offers undergraduate programmes
            across science, engineering, business, humanities, law and
            biomedical disciplines. The programmes are designed to provide
            students with academic knowledge, professional skills and
            practical learning opportunities.
        </div>


        {{-- ADMISSION REQUIREMENTS --}}
        <div class="section-header">
            <h2>Admission Criteria</h2>
            <div class="section-line"></div>
        </div>

        <div class="criteria-box">

            <ol>

                <li>
                    Applicants should have at least a second division or
                    GPA 2.50 or equivalent grade in both SSC and HSC or
                    equivalent examinations. Where GPA in one examination
                    is at least 2.00, the combined GPA should be at least 6.00.
                </li>

                <li>
                    For O-Level and A-Level applicants, the university's
                    prescribed subject and grade requirements must be fulfilled.
                </li>

                <li>
                    Bachelor of Pharmacy applicants are subject to additional
                    academic requirements prescribed for the programme.
                </li>

            </ol>

        </div>


        {{-- PROGRAM TABLE --}}
        <div class="section-header">
            <h2>Undergraduate Programmes & Fees</h2>
            <div class="section-line"></div>
        </div>

        <div class="program-table-wrapper">

            <table class="program-table">

                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Programme</th>
                        <th>Credits</th>
                        <th>Duration</th>
                        <th>Semesters</th>
                        <th>Admission Fee</th>
                        <th>Total Programme Fee</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td class="program-name">
                            Bachelor of Arts (Hons.) in English
                        </td>
                        <td>140</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳322,000</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td class="program-name">
                            Bachelor of Computer Science & Engineering
                        </td>
                        <td>150</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳502,500</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td class="program-name">
                            Bachelor of Business Administration
                        </td>
                        <td>141</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳373,650</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td class="program-name">
                            Bachelor of Pharmacy
                        </td>
                        <td>159</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳516,750</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td class="program-name">
                            Bachelor of Science in Biochemistry & Biotechnology
                        </td>
                        <td>160</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳460,000</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td class="program-name">
                            Bachelor of Science in Microbiology
                        </td>
                        <td>160</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳448,000</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td class="program-name">
                            Bachelor of Science in Electrical & Electronics Engineering
                        </td>
                        <td>163</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳467,810</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td class="program-name">
                            Bachelor of Laws
                        </td>
                        <td>144</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳381,600</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td class="program-name">
                            Bachelor of Arts (Hons.) in Islamic Studies
                        </td>
                        <td>140</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳6,500</td>
                        <td>৳126,000</td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td class="program-name">
                            Bachelor of Science in Mechatronics Engineering
                        </td>
                        <td>167</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳517,700</td>
                    </tr>

                    <tr>
                        <td>11</td>
                        <td class="program-name">
                            Bachelor of Science in Information & Communication Technology
                        </td>
                        <td>150</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳502,500</td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td class="program-name">
                            Bachelor of Science in Electronics and Telecommunication Engineering
                        </td>
                        <td>180</td>
                        <td>4 Years</td>
                        <td>8</td>
                        <td>৳12,000</td>
                        <td>৳502,500</td>
                    </tr>

                </tbody>

            </table>

        </div>


        {{-- CTA --}}
      

    </div>

</div>

@endsection