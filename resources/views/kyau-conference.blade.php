@extends('layouts.app')

@section('content')


<style>

.conference-section{

padding:clamp(2.5rem,6vw,5rem) 0;
background:#fff;

}


.conference-container{

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


.conference-card{

border:1px solid #e2e2e2;
border-radius:10px;
padding:25px;
margin-bottom:25px;

}



.conference-card h3{

color:#e8552e;

}



.conference-card p,
.conference-card li{

color:#555;
line-height:1.9;

}



.conference-card ul{

padding-left:20px;

}


</style>





<section class="conference-section">


<div class="conference-container">





<h1 class="page-title">

KYAU Conference

</h1>



<div class="orange-line"></div>







<div class="conference-card">


<h3>

About KYAU Conference

</h3>


<p>

KYAU organizes academic conferences to provide a platform for researchers, academicians, students, and professionals to exchange knowledge and present innovative research outcomes.

</p>


</div>







<div class="conference-card">


<h3>

Conference Activities

</h3>


<ul>

<li>
Research paper presentation.
</li>

<li>
Academic discussions and knowledge sharing.
</li>

<li>
Expert talks and keynote sessions.
</li>

<li>
Research collaboration opportunities.
</li>

</ul>


</div>







<div class="conference-card">


<h3>

Upcoming Conferences

</h3>


<p>

Information about upcoming conferences, submission guidelines, schedules, and registration details will be announced soon.

</p>


</div>






</div>


</section>



@endsection