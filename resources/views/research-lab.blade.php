@extends('layouts.app')

@section('content')


<style>

.lab-section{

padding:clamp(2.5rem,6vw,5rem) 0;
background:#fff;

}


.lab-container{

max-width:1100px;
margin:auto;
padding:0 1.25rem;

}


.page-title{

text-align:center;
font-size:2rem;
font-weight:700;

}


.orange-line{

width:70px;
height:3px;
background:#e8552e;
margin:0 auto 35px;

}



.lab-card{

border:1px solid #e2e2e2;
border-radius:10px;
padding:25px;
margin-bottom:25px;

}


.lab-card h3{

color:#e8552e;

}


.lab-card p,
.lab-card li{

color:#555;
line-height:1.9;

}


.lab-card ul{

padding-left:20px;

}


@media(max-width:600px){

.page-title{
font-size:1.6rem;
}

}

</style>





<section class="lab-section">


<div class="lab-container">



<h1 class="page-title">

Research Lab

</h1>



<div class="orange-line"></div>







<div class="lab-card">


<h3>

Overview

</h3>


<p>

KYAU research laboratories provide facilities and resources to support innovative research, experimentation, and practical learning. The labs enable students and researchers to conduct advanced research activities.

</p>


</div>







<div class="lab-card">


<h3>

Research Laboratory Facilities

</h3>


<ul>

<li>
Advanced computing and technology facilities.
</li>

<li>
Engineering and scientific research equipment.
</li>

<li>
Data analysis and simulation facilities.
</li>

<li>
Collaborative research environment.
</li>

</ul>


</div>







<div class="lab-card">


<h3>

Laboratory Research Areas

</h3>


<ul>

<li>
Artificial Intelligence and Machine Learning.
</li>

<li>
Software and Information Technology.
</li>

<li>
Engineering Innovation.
</li>

<li>
Health and Life Science Research.
</li>

<li>
Interdisciplinary research projects.
</li>

</ul>


</div>







<div class="lab-card">


<h3>

Laboratory Information

</h3>


<p>

Details of individual research laboratories, facilities, equipment, and research activities will be updated soon.

</p>


</div>





</div>


</section>


@endsection