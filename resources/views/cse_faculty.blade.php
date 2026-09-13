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

.fac-page{
    background:var(--paper);
    padding-bottom:clamp(3rem,6vw,5rem);
}

.fac-container{
    max-width:1080px;
    margin:0 auto;
    padding:0 1.25rem;
}



/* Masthead */

.fac-masthead{
    background:var(--forest);
    background-image:linear-gradient(160deg,var(--forest) 0%,var(--forest-deep) 100%);
    padding:clamp(2.5rem,6vw,3.75rem) 1.25rem;
    text-align:center;
    margin-bottom:clamp(2.5rem,5vw,3.5rem);
}

.fac-eyebrow{
    font-family:'Inter',sans-serif;
    font-size:.78rem;
    letter-spacing:.06em;
    color:var(--brass);
    font-weight:600;
    margin:0 0 .6rem;
}

.fac-title{
    font-family:'Source Serif 4',serif;
    font-weight:600;
    font-size:clamp(1.6rem,3.4vw,2.3rem);
    color:#fff;
    margin:0;
    line-height:1.25;
}



/* Section labels */

.fac-label{
    font-family:'Inter',sans-serif;
    font-size:.95rem;
    font-weight:600;
    color:var(--muted);
    text-align:center;
    margin:0 0 1.5rem;
    position:relative;
}

.fac-label::after{
    content:"";
    display:block;
    width:36px;
    height:2px;
    background:var(--brass);
    margin:.6rem auto 0;
}



/* Dean — widest, most prominent */

.dean-card{
    display:flex;
    align-items:center;
    gap:2rem;
    background:#fff;
    border:1px solid var(--line);
    border-left:4px solid var(--forest);
    padding:2rem;
    max-width:760px;
    margin:0 auto clamp(2.5rem,5vw,3.5rem);
}

.dean-photo{
    flex:0 0 128px;
    width:128px;
    height:128px;
    border-radius:4px;
    background:#eceee9;
    overflow:hidden;
}

.dean-photo img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

.dean-name{
    font-family:'Source Serif 4',serif;
    font-size:1.3rem;
    font-weight:600;
    color:var(--ink);
    margin:0 0 .3rem;
}

.dean-title{
    font-family:'Inter',sans-serif;
    font-size:.92rem;
    color:var(--brass);
    font-weight:600;
    margin:0;
}



/* Head of Department — distinct, sits under Dean, slightly smaller */

.head-card{
    display:flex;
    align-items:center;
    gap:1.5rem;
    background:#fff;
    border:1px solid var(--line);
    border-left:4px solid var(--brass);
    padding:1.5rem 1.75rem;
    max-width:600px;
    margin:0 auto clamp(3rem,6vw,4.5rem);
}

.head-photo{
    flex:0 0 96px;
    width:96px;
    height:96px;
    border-radius:4px;
    background:#eceee9;
    overflow:hidden;
}

.head-photo img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

.head-name{
    font-family:'Source Serif 4',serif;
    font-size:1.1rem;
    font-weight:600;
    color:var(--ink);
    margin:0 0 .25rem;
}

.head-title{
    font-family:'Inter',sans-serif;
    font-size:.85rem;
    color:var(--muted);
    font-weight:500;
    margin:0;
}



/* Department heading */

.dept-heading{
    font-family:'Source Serif 4',serif;
    font-weight:600;
    font-size:clamp(1.15rem,2.2vw,1.4rem);
    color:var(--ink);
    text-align:center;
    margin:0 0 2rem;
}



/* Faculty grid */

.faculty-grid{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(160px,1fr));
    gap:1.1rem;
    margin-bottom:2rem;
}

.faculty-card{
    background:#fff;
    border:1px solid var(--line);
    padding:1rem;
}

.faculty-photo{
    aspect-ratio:1/1;
    background:#eceee9;
    margin-bottom:.75rem;
    overflow:hidden;
    display:flex;
    align-items:center;
    justify-content:center;
}

.faculty-photo img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

.faculty-photo.coming-soon{
    background:var(--forest);
    color:#fff;
    font-family:'Inter',sans-serif;
    font-size:.78rem;
    font-weight:600;
    text-align:center;
    padding:.5rem;
}

.faculty-name{
    font-family:'Source Serif 4',serif;
    font-size:.95rem;
    font-weight:600;
    color:var(--ink);
    margin:0 0 .2rem;
    line-height:1.35;
}

.faculty-title{
    font-family:'Inter',sans-serif;
    font-size:.78rem;
    color:var(--muted);
    font-weight:500;
    margin:0;
    line-height:1.4;
}

.faculty-status{
    display:inline-block;
    font-family:'Inter',sans-serif;
    font-size:.68rem;
    font-weight:600;
    color:var(--brass);
    border:1px solid var(--brass);
    border-radius:20px;
    padding:.1rem .55rem;
    margin-top:.45rem;
}



/* Pagination */

.fac-pagination{
    display:flex;
    justify-content:flex-end;
    align-items:center;
    gap:.4rem;
}

.fac-pagination a{
    font-family:'Inter',sans-serif;
    font-size:.82rem;
    font-weight:600;
    text-decoration:none;
    color:var(--forest);
    min-width:1.9rem;
    text-align:center;
    padding:.3rem .5rem;
    border:1px solid var(--line);
}

.fac-pagination a.active{
    background:var(--forest);
    color:#fff;
    border-color:var(--forest);
}

.fac-pagination a.next{
    padding:.3rem .75rem;
}



/* Responsive */

@media(max-width:600px){

.dean-card,
.head-card{
    flex-direction:column;
    text-align:center;
}

.fac-pagination{
    justify-content:center;
    flex-wrap:wrap;
}

}

</style>


<div class="fac-page">


<div class="fac-masthead">
<p class="fac-eyebrow">FACULTY</p>
<h1 class="fac-title">Faculty of Science and Information Technology</h1>
</div>


<div class="fac-container">


@php
  $dean = ['name' => 'Professor Dr. Md. Fokhray Hossain', 'title' => 'Dean & Professor', 'photo' => ''];

  $departmentName = 'Software Engineering';

  $head = ['name' => 'F M Javed Mehedi Samrat', 'title' => 'Assistant Professor & Head', 'photo' => ''];


  $faculty = [
    ['name' => 'Prof. Dr. A. H. M. Saifullah Sadi', 'title' => 'Professor & Director, M.Sc in Cyber Security', 'photo' => ''],
    ['name' => 'Prof. Dr. Ismail Rakip Karas', 'title' => 'Visiting Faculty', 'photo' => ''],
    ['name' => 'Mr. Palash Ahmed', 'title' => 'Practicing Industry-Academician', 'coming_soon' => true],
    ['name' => 'Prof. Dr. Mohammad Mobarak Hossain', 'title' => 'Professor', 'photo' => ''],

    ['name' => 'Mr. S A M Matiur Rahman', 'title' => 'Associate Professor', 'status' => 'On Leave', 'photo' => ''],
    ['name' => 'Kaushik Sarker', 'title' => 'Associate Professor', 'status' => 'Study Leave', 'photo' => ''],
    ['name' => 'Mr. A.H.M Shahariar Parvez', 'title' => 'Associate Professor', 'photo' => ''],
    ['name' => 'Dr. Rubaiyat Islam', 'title' => 'Associate Professor', 'photo' => ''],
    ['name' => 'Dr. S M Hasan Mahmud', 'title' => 'Associate Professor', 'photo' => ''],

    ['name' => 'Dr. Md. Abdul Kader', 'title' => 'Associate Professor', 'photo' => ''],
    ['name' => 'Dr. Kamrul Islam Shahin', 'title' => 'Associate Professor', 'photo' => ''],
    ['name' => 'Mr. Md. Khaled Sohel', 'title' => 'Assistant Professor', 'photo' => ''],
    ['name' => 'Ms. Shahina Haque', 'title' => 'Assistant Professor', 'photo' => ''],
    ['name' => 'Mr. Md Fahad Bin Zamal', 'title' => 'Assistant Professor', 'status' => 'Study Leave', 'photo' => ''],

    ['name' => 'Mr. Md. Anwar Hossen', 'title' => 'Assistant Professor', 'status' => 'Study Leave', 'photo' => ''],
    ['name' => 'Afsana Begum', 'title' => 'Assistant Professor & Coordinator M.Sc', 'photo' => ''],
    ['name' => 'Ms. Farzana Sadia', 'title' => 'Assistant Professor', 'status' => 'On Leave', 'photo' => ''],
  ];

  $currentPage = 1;
  $totalPages  = 3;
@endphp


{{-- ===================== Dean ===================== --}}

<p class="fac-label">Dean's Office</p>

<div class="dean-card">

<div class="dean-photo">
@if(!empty($dean['photo']))
<img src="{{ asset($dean['photo']) }}" alt="{{ $dean['name'] }}">
@endif
</div>

<div>
<p class="dean-name">{{ $dean['name'] }}</p>
<p class="dean-title">{{ $dean['title'] }}</p>
</div>

</div>



{{-- ===================== Head of Department ===================== --}}

<p class="fac-label">Head of Department</p>

<div class="head-card">

<div class="head-photo">
@if(!empty($head['photo']))
<img src="{{ asset($head['photo']) }}" alt="{{ $head['name'] }}">
@endif
</div>

<div>
<p class="head-name">{{ $head['name'] }}</p>
<p class="head-title">{{ $head['title'] }}, Department of {{ $departmentName }}</p>
</div>

</div>



{{-- ===================== Department heading ===================== --}}

<h2 class="dept-heading">Department of Computer Science And Engineering</h2>



{{-- ===================== Faculty grid ===================== --}}

<div class="faculty-grid">
@foreach ($faculty as $member)
<div class="faculty-card">

<div class="faculty-photo @if(!empty($member['coming_soon'])) coming-soon @endif">
@if(!empty($member['coming_soon']))
Coming Soon
@elseif(!empty($member['photo']))
<img src="{{ asset($member['photo']) }}" alt="{{ $member['name'] }}">
@endif
</div>

<p class="faculty-name">{{ $member['name'] }}</p>
<p class="faculty-title">{{ $member['title'] }}</p>
@if(!empty($member['status']))
<span class="faculty-status">{{ $member['status'] }}</span>
@endif

</div>
@endforeach
</div>



{{-- ===================== Pagination ===================== --}}

<div class="fac-pagination">
@for ($page = 1; $page <= $totalPages; $page++)
<a href="?page={{ $page }}" class="@if($page === $currentPage) active @endif">{{ $page }}</a>
@endfor
@if ($currentPage < $totalPages)
<a href="?page={{ $currentPage + 1 }}" class="next">Next &gt;</a>
@endif
</div>


</div>


</div>

@endsection