@extends('layouts.app')

@section('content')


<style>

.research-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}

.research-container{
    max-width:1100px;
    margin:auto;
    padding:0 1.25rem;
}

.page-title{
    text-align:center;
    font-size:2rem;
    font-weight:700;
    color:#222;
}

.orange-line{
    width:70px;
    height:3px;
    background:#e8552e;
    margin:0 auto 35px;
}

.intro{
    max-width:900px;
    margin:auto;
    text-align:justify;
    color:#555;
    line-height:1.9;
}


.research-card{
    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;
}


.research-card:hover{
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}


.research-card h3{
    color:#e8552e;
    margin-bottom:15px;
}


.research-card p,
.research-card li{
    color:#555;
    line-height:1.9;
}


.research-card ul{
    padding-left:20px;
}

</style>


<section class="research-section">


<div class="research-container">


<h1 class="page-title">

Research Division

</h1>


<div class="orange-line"></div>



<p class="intro">

The Research Division of Khwaja Yunus Ali University (KYAU) promotes innovative research, academic excellence, and knowledge creation through interdisciplinary collaboration. The division supports faculty members and students in conducting impactful research activities.

</p>




<div class="research-card">


<h3>
Research Objectives
</h3>


<ul>

<li>
Promote research culture among faculty members and students.
</li>

<li>
Encourage innovative and interdisciplinary research.
</li>

<li>
Support publication in national and international journals.
</li>

<li>
Develop collaboration with academic and industrial organizations.
</li>

</ul>


</div>





<div class="research-card">


<h3>
Research Areas
</h3>


<ul>

<li>
Science and Engineering Research.
</li>

<li>
Business and Management Studies.
</li>

<li>
Health and Medical Research.
</li>

<li>
Social Science and Humanities.
</li>

<li>
Emerging technology and innovation.
</li>

</ul>


</div>




</div>

</section>


@endsection