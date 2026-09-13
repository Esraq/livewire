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

.cal-page{
    background:var(--paper);
    padding-bottom:clamp(3rem,6vw,5rem);
}

.cal-container{
    max-width:960px;
    margin:0 auto;
    padding:0 1.25rem;
}



/* Masthead */

.cal-masthead{
    background:var(--forest);
    background-image:linear-gradient(160deg,var(--forest) 0%,var(--forest-deep) 100%);
    padding:clamp(2.5rem,6vw,3.75rem) 1.25rem;
    text-align:center;
    margin-bottom:clamp(2.5rem,5vw,3.5rem);
}

.cal-eyebrow{
    font-family:'Inter',sans-serif;
    font-size:.78rem;
    letter-spacing:.06em;
    color:var(--brass);
    font-weight:600;
    margin:0 0 .6rem;
}

.cal-title{
    font-family:'Source Serif 4',serif;
    font-weight:600;
    font-size:clamp(1.6rem,3.4vw,2.3rem);
    color:#fff;
    margin:0 0 .75rem;
    line-height:1.25;
}

.cal-tagline{
    font-family:'Inter',sans-serif;
    font-size:.95rem;
    color:#e7ece7;
    max-width:520px;
    margin:0 auto;
    line-height:1.7;
}



/* Semester tabs */

.cal-tabs{
    display:flex;
    justify-content:center;
    gap:.5rem;
    margin-bottom:2rem;
}

.cal-tab{
    font-family:'Inter',sans-serif;
    font-size:.88rem;
    font-weight:600;
    color:var(--forest);
    text-decoration:none;
    padding:.55rem 1.4rem;
    border:1px solid var(--line);
    background:#fff;
}

.cal-tab.active{
    background:var(--forest);
    color:#fff;
    border-color:var(--forest);
}



/* Semester block */

.semester-block{
    margin-bottom:clamp(3rem,5vw,4rem);
}

.semester-heading{
    display:flex;
    align-items:baseline;
    justify-content:space-between;
    flex-wrap:wrap;
    gap:.5rem;
    margin-bottom:1.25rem;
    border-bottom:2px solid var(--forest);
    padding-bottom:.75rem;
}

.semester-name{
    font-family:'Source Serif 4',serif;
    font-weight:600;
    font-size:1.35rem;
    color:var(--ink);
    margin:0;
}

.semester-period{
    font-family:'Inter',sans-serif;
    font-size:.85rem;
    font-weight:600;
    color:var(--brass);
}



/* Events table */

.cal-table{
    width:100%;
    border-collapse:collapse;
    background:#fff;
    border:1px solid var(--line);
}

.cal-table th{
    font-family:'Inter',sans-serif;
    font-size:.78rem;
    font-weight:600;
    letter-spacing:.03em;
    text-transform:uppercase;
    color:var(--muted);
    text-align:left;
    padding:.85rem 1.25rem;
    background:#f0f1ee;
    border-bottom:1px solid var(--line);
}

.cal-table td{
    font-family:'Inter',sans-serif;
    font-size:.92rem;
    color:var(--ink);
    padding:.85rem 1.25rem;
    border-bottom:1px solid var(--line);
    line-height:1.5;
}

.cal-table tr:last-child td{
    border-bottom:none;
}

.cal-table td.date-col{
    color:var(--forest);
    font-weight:600;
    white-space:nowrap;
}



/* Download link */

.cal-download{
    display:inline-flex;
    align-items:center;
    gap:.5rem;
    font-family:'Inter',sans-serif;
    font-size:.88rem;
    font-weight:600;
    color:#fff;
    background:var(--forest);
    text-decoration:none;
    padding:.7rem 1.5rem;
    margin-top:1.5rem;
}

.cal-download:hover{
    background:var(--forest-deep);
}



/* Responsive */

@media(max-width:600px){

.cal-table{
    display:block;
    overflow-x:auto;
    white-space:nowrap;
}

.cal-tabs{
    flex-wrap:wrap;
}

}

</style>


<div class="cal-page">


@php
  $semesters = [

    [
      'name'   => 'Spring Semester',
      'period' => 'January – June',
      'events' => [
        ['date' => '', 'title' => 'Admission Test'],
        ['date' => '', 'title' => 'Class Registration'],
        ['date' => '', 'title' => 'Classes Begin'],
        ['date' => '', 'title' => 'Mid-Term Examination'],
        ['date' => '', 'title' => 'Final Examination'],
        ['date' => '', 'title' => 'Result Publication'],
      ],
    ],

    [
      'name'   => 'Summer Semester',
      'period' => 'July – December',
      'events' => [
        ['date' => '', 'title' => 'Admission Test'],
        ['date' => '', 'title' => 'Class Registration'],
        ['date' => '', 'title' => 'Classes Begin'],
        ['date' => '', 'title' => 'Mid-Term Examination'],
        ['date' => '', 'title' => 'Final Examination'],
        ['date' => '', 'title' => 'Result Publication'],
      ],
    ],

  ];

  $calendarPdf = '';
@endphp


<div class="cal-masthead">
<p class="cal-eyebrow">Academics</p>
<h1 class="cal-title">Academic Calendar</h1>
<p class="cal-tagline">Key dates for admission, registration and examinations across the academic year.</p>
</div>


<div class="cal-container">


<div class="cal-tabs">
@foreach ($semesters as $index => $semester)
<a href="#{{ \Illuminate\Support\Str::slug($semester['name']) }}" class="cal-tab @if($index === 0) active @endif">{{ $semester['name'] }}</a>
@endforeach
</div>


@foreach ($semesters as $semester)
<div class="semester-block" id="{{ \Illuminate\Support\Str::slug($semester['name']) }}">

<div class="semester-heading">
<h2 class="semester-name">{{ $semester['name'] }}</h2>
<span class="semester-period">{{ $semester['period'] }}</span>
</div>

<table class="cal-table">
<thead>
<tr>
<th style="width:220px;">Date</th>
<th>Event</th>
</tr>
</thead>
<tbody>
@foreach ($semester['events'] as $event)
<tr>
<td class="date-col">{{ $event['date'] !== '' ? $event['date'] : '—' }}</td>
<td>{{ $event['title'] }}</td>
</tr>
@endforeach
</tbody>
</table>

</div>
@endforeach


@if(!empty($calendarPdf))
<a href="{{ asset($calendarPdf) }}" class="cal-download" download>
Download Full Academic Calendar (PDF)
</a>
@endif


</div>


</div>

@endsection