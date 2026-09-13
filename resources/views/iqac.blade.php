@extends('layouts.app')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:opsz,wght@8..60,500;8..60,600;8..60,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

:root{
    --ink:#1c1e1c;
    --forest:#1f3d2b;
    --forest-deep:#16301f;
    --brass:#b08d3e;
    --paper:#f6f7f5;
    --line:#dde1dc;
    --muted:#6c756f;
}

.iqac-page{
    background:var(--paper);
    padding-bottom:clamp(3rem,6vw,5rem);
}

.iqac-container{
    max-width:1080px;
    margin:0 auto;
    padding:0 1.25rem;
}



/* Masthead */

.iqac-masthead{
    background:var(--forest);
    background-image:linear-gradient(160deg,var(--forest) 0%,var(--forest-deep) 100%);
    padding:clamp(2.5rem,6vw,3.75rem) 1.25rem;
    text-align:center;
    margin-bottom:clamp(2.5rem,5vw,3.5rem);
}

.iqac-eyebrow{
    font-family:'Inter',sans-serif;
    font-size:.78rem;
    letter-spacing:.06em;
    color:var(--brass);
    font-weight:600;
    margin:0 0 .6rem;
}

.iqac-title{
    font-family:'Source Serif 4',serif;
    font-weight:600;
    font-size:clamp(1.5rem,3.2vw,2.1rem);
    color:#fff;
    margin:0 0 .75rem;
    line-height:1.3;
}

.iqac-tagline{
    font-family:'Inter',sans-serif;
    font-size:.98rem;
    color:#e7ece7;
    max-width:620px;
    margin:0 auto;
    line-height:1.7;
}



/* Section labels */

.iqac-label{
    font-family:'Inter',sans-serif;
    font-size:.95rem;
    font-weight:600;
    color:var(--muted);
    text-align:center;
    margin:0 0 1.75rem;
}

.iqac-label::after{
    content:"";
    display:block;
    width:36px;
    height:2px;
    background:var(--brass);
    margin:.6rem auto 0;
}

.iqac-heading{
    font-family:'Source Serif 4',serif;
    font-weight:600;
    font-size:clamp(1.2rem,2.4vw,1.5rem);
    color:var(--ink);
    text-align:center;
    margin:0 0 .5rem;
}



/* Director */

.director-card{
    display:flex;
    align-items:center;
    gap:2rem;
    background:#fff;
    border:1px solid var(--line);
    border-left:4px solid var(--forest);
    padding:2rem;
    max-width:640px;
    margin:0 auto clamp(3.5rem,6vw,5rem);
}

.director-photo{
    flex:0 0 120px;
    width:120px;
    height:120px;
    border-radius:4px;
    background:#eceee9;
    overflow:hidden;
}

.director-photo img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

.director-name{
    font-family:'Source Serif 4',serif;
    font-size:1.25rem;
    font-weight:600;
    color:var(--ink);
    margin:0 0 .3rem;
}

.director-title{
    font-family:'Inter',sans-serif;
    font-size:.9rem;
    color:var(--brass);
    font-weight:600;
    margin:0 0 .75rem;
}

.director-link{
    font-family:'Inter',sans-serif;
    font-size:.85rem;
    font-weight:600;
    color:var(--forest);
    text-decoration:none;
    border-bottom:1px solid var(--forest);
    padding-bottom:1px;
}



/* Team grid */

.team-grid{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(180px,1fr));
    gap:1.25rem;
    margin-bottom:clamp(3.5rem,6vw,5rem);
}

.team-card{
    background:#fff;
    border:1px solid var(--line);
    padding:1.25rem;
    text-align:center;
}

.team-photo{
    width:96px;
    height:96px;
    border-radius:50%;
    background:#eceee9;
    margin:0 auto .9rem;
    overflow:hidden;
}

.team-photo img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

.team-name{
    font-family:'Source Serif 4',serif;
    font-size:.98rem;
    font-weight:600;
    color:var(--ink);
    margin:0 0 .3rem;
    line-height:1.35;
}

.team-role{
    font-family:'Inter',sans-serif;
    font-size:.78rem;
    color:var(--muted);
    font-weight:500;
    margin:0;
    line-height:1.5;
}



/* Info blocks (objectives / functions / history) */

.info-block{
    background:#fff;
    border:1px solid var(--line);
    padding:clamp(1.75rem,4vw,2.5rem);
    margin-bottom:2rem;
}

.info-block p{
    font-family:'Inter',sans-serif;
    color:#444;
    line-height:1.8;
    font-size:.96rem;
    margin:0 0 1rem;
}

.info-block p:last-child{
    margin-bottom:0;
}

.info-list{
    margin:0;
    padding-left:1.25rem;
}

.info-list li{
    font-family:'Inter',sans-serif;
    color:#444;
    line-height:1.8;
    font-size:.96rem;
    margin-bottom:.6rem;
}

.info-list.two-col{
    columns:2;
    column-gap:2.5rem;
}

.info-list.two-col li{
    break-inside:avoid;
}



/* News */

.news-grid{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(240px,1fr));
    gap:1.25rem;
    margin-bottom:1rem;
}

.news-card{
    background:#fff;
    border:1px solid var(--line);
    overflow:hidden;
}

.news-photo{
    aspect-ratio:16/10;
    background:#eceee9;
    overflow:hidden;
}

.news-photo img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

.news-body{
    padding:1.1rem 1.25rem 1.4rem;
}

.news-date{
    font-family:'Inter',sans-serif;
    font-size:.72rem;
    font-weight:600;
    color:var(--brass);
    margin:0 0 .5rem;
}

.news-title{
    font-family:'Source Serif 4',serif;
    font-size:1rem;
    font-weight:600;
    color:var(--ink);
    margin:0 0 .6rem;
    line-height:1.4;
}

.news-link{
    font-family:'Inter',sans-serif;
    font-size:.8rem;
    font-weight:600;
    color:var(--forest);
    text-decoration:none;
}



/* Contact strip */

.contact-strip{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:2.5rem;
    background:#fff;
    border:1px solid var(--line);
    padding:1.75rem;
    margin-top:1rem;
}

.contact-item{
    font-family:'Inter',sans-serif;
    font-size:.88rem;
    color:var(--ink);
    text-align:center;
}

.contact-item strong{
    display:block;
    color:var(--muted);
    font-size:.72rem;
    font-weight:600;
    letter-spacing:.04em;
    text-transform:uppercase;
    margin-bottom:.3rem;
}

.contact-item a{
    color:var(--ink);
    text-decoration:none;
}



/* Responsive */

@media(max-width:600px){

.director-card{
    flex-direction:column;
    text-align:center;
}

.info-list.two-col{
    columns:1;
}

}

</style>


<div class="iqac-page">


@php
  $university = ['name' => 'Khwaja Yunus Ali University'];

  $iqac = [
    'tagline' => 'The general objective of the IQAC is to promote a quality assurance culture within the university.',
  ];

  $director = [
    'name'  => 'Prof. Dr. Mostofa Mahmud Hasan',
    'title' => 'Director, IQAC',
    'photo' => '',
  ];

  $team = [
    ['name' => 'Prof. Dr. Mostofa Mahmud Hasan', 'role' => 'Director of IQAC', 'photo' => ''],
    ['name' => 'Prof. Dr. Fazle Rabbi Shakil Ahmed', 'role' => 'Additional Director of IQAC (ETL)', 'photo' => ''],
    ['name' => 'Mr. Md. Matiur Rahman', 'role' => 'Additional Director of IQAC (QA)', 'photo' => ''],
    ['name' => 'Mr. Md. Milton Hossain', 'role' => 'Senior Web Developer, IT Cell IQAC', 'photo' => ''],
    ['name' => 'Muhammad Zahirul Haque', 'role' => 'Senior Officer (IQAC)', 'photo' => ''],
  ];

  $objectives = [
    'Institutionalize the quality assurance culture in accordance with national QA guidelines and international practices.',
    'Ensure that the university\'s quality assurance procedures are designed following the QAU guidelines and national requirements.',
    'Develop, maintain and enhance quality of education and people\'s perception in favor of the university through consistent quality assurance practice and performance.',
    'Build image of the university with confidence of the stakeholders ensuring transparency, accountability, and good practices in all aspects of management.',
    'Prepare the university to meet the external quality assurance assessment and accreditation requirements.',
  ];

  $functions = [
    'Facilitate to define the mission and objectives of the university for enhancing the quality and relevance of higher education and respond to global trends on quality education.',
    'Guide and assist the program offering entities of the university to define program objectives.',
    'Develop standards and benchmarks for various academic and administrative activities of the university.',
    'Review existing procedures for further improvement of delivery of higher education.',
    'Prepare QA documents and procedures for use within the university following specifications and guidelines provided in the IQAC OM.',
    'Encourage staff to maintain professional code of conduct in accordance with the QAU guidelines and international practices and facilitate to maintain good practices in operations.',
    'Provide necessary support to the study program offering academic units to conduct self-assessment, external peer review and implement QA process at program level.',
    'Conduct regular monitoring of implementation of policies, systems, processes and procedures.',
    'Facilitate to conduct institutional assessment.',
    'Facilitate the approval of new program offering entities and new programs for existing entities using appropriate procedures.',
    'Develop a database containing information regarding quality assurance, deliverable to all stakeholders.',
    'Prepare and produce the annual Institutional Quality Assurance Report (IQAR) and submit it to the QAC.',
    'Develop an Institutional QA Strategic Plan for every 5 years and monitor its implementation.',
    'Co-ordinate all QA related activities within the university.',
    'Liaise with QAU and other external QA agencies.',
    'Organize workshops, seminars and appropriate training for capacity building and promoting QA culture.',
    'Advise university management, faculty and departments on QA and related matters.',
    'Take initiative and lead to establish a staff development center at the university.',
    'Prepare the detailed budget of the IQAC.',
    'Conduct impromptu audit at any level of the university if necessary.',
  ];

  $history = "Since the inception of the IQAC, different quality assurance activities, quality teaching, training programs, workshops, seminars and conferences have been arranged that encourage the enhancement of quality teaching and learning for faculty members and students. It also covers pedagogical and andragogical issues, faculty and staff-wise events and activities. With the IQAC's support and the co-operation of all stakeholders of the teaching-learning arena, the university continues to work toward better quality education, guided by IQAC plans, programs and activities aligned with the university's vision, mission and objectives, and the guidelines of UGC & BAC as appropriate.";

  $news = [
    ['date' => '', 'title' => 'News and event details will appear here.', 'photo' => ''],
  ];
@endphp


<div class="iqac-masthead">
<p class="iqac-eyebrow">IQAC</p>
<h1 class="iqac-title">{{ $university['name'] }} — Institutional Quality Assurance Cell</h1>
<p class="iqac-tagline">{{ $iqac['tagline'] }}</p>
</div>


<div class="iqac-container">


{{-- ===================== Director ===================== --}}

<p class="iqac-label">Director</p>

<div class="director-card">

<div class="director-photo">
@if(!empty($director['photo']))
<img src="{{ asset($director['photo']) }}" alt="{{ $director['name'] }}">
@endif
</div>

<div>
<p class="director-name">{{ $director['name'] }}</p>
<p class="director-title">{{ $director['title'] }}</p>
<a href="#" class="director-link">Read more</a>
</div>

</div>



{{-- ===================== Team ===================== --}}

<h2 class="iqac-heading">Meet the Team</h2>
<p class="iqac-label">IQAC Members</p>

<div class="team-grid">
@foreach ($team as $member)
<div class="team-card">

<div class="team-photo">
@if(!empty($member['photo']))
<img src="{{ asset($member['photo']) }}" alt="{{ $member['name'] }}">
@endif
</div>

<p class="team-name">{{ $member['name'] }}</p>
<p class="team-role">{{ $member['role'] }}</p>

</div>
@endforeach
</div>



{{-- ===================== Objectives ===================== --}}

<h2 class="iqac-heading">Objectives of the IQAC</h2>
<p class="iqac-label">Why IQAC Exists</p>

<div class="info-block">
<p>{{ $iqac['tagline'] }} The specific objectives are to:</p>
<ul class="info-list">
@foreach ($objectives as $item)
<li>{{ $item }}</li>
@endforeach
</ul>
</div>



{{-- ===================== Functions ===================== --}}

<h2 class="iqac-heading">Functions of the IQAC</h2>
<p class="iqac-label">How IQAC Operates</p>

<div class="info-block">
<p>In order to achieve the objectives, the major functions of the IQAC are to:</p>
<ul class="info-list two-col">
@foreach ($functions as $item)
<li>{{ $item }}</li>
@endforeach
</ul>
</div>



{{-- ===================== Establishment / History ===================== --}}

<h2 class="iqac-heading">Establishment of IQAC</h2>
<p class="iqac-label">Background</p>

<div class="info-block">
<p>{{ $history }}</p>
</div>



{{-- ===================== News & Events ===================== --}}

<h2 class="iqac-heading">Recent News &amp; Events</h2>
<p class="iqac-label">Updates from IQAC</p>

<div class="news-grid">
@foreach ($news as $item)
<div class="news-card">

<div class="news-photo">
@if(!empty($item['photo']))
<img src="{{ asset($item['photo']) }}" alt="{{ $item['title'] }}">
@endif
</div>

<div class="news-body">
@if(!empty($item['date']))
<p class="news-date">{{ $item['date'] }}</p>
@endif
<p class="news-title">{{ $item['title'] }}</p>
<a href="#" class="news-link">Read Details</a>
</div>

</div>
@endforeach
</div>



{{-- ===================== Contact ===================== --}}

<div class="contact-strip">

<div class="contact-item">
<strong>Phone</strong>
<a href="tel:+8801404461555">+880 1404 461555</a>
</div>

<div class="contact-item">
<strong>Email</strong>
<a href="mailto:iqac@kyau.edu.bd">iqac@kyau.edu.bd</a>
</div>

<div class="contact-item">
<strong>Address</strong>
Enayetpur, Sirajganj-6751
</div>

</div>


</div>


</div>

@endsection