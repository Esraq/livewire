@extends('layouts.app')

@section('content')


<style>

.sports-section{

    padding:clamp(2.5rem,6vw,5rem) 0;
    background:#fff;

}


.sports-container{

    max-width:1100px;
    margin:auto;
    padding:0 1.25rem;

}



.page-title{

    text-align:center;
    font-size:2rem;
    font-weight:700;
    color:#222;
    margin-bottom:10px;

}



.orange-line{

    width:70px;
    height:3px;
    background:#e8552e;
    margin:0 auto 35px;

}





.sports-intro{

    max-width:900px;
    margin:auto;
    text-align:justify;
    color:#555;
    line-height:1.9;
    font-size:1.02rem;

}





.sports-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}



.sports-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.sports-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.sports-card p,
.sports-card li{

    color:#555;
    line-height:1.9;

}



.sports-card ul{

    padding-left:20px;

}





.sports-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
    margin-top:25px;

}





.sports-icon{

    width:75px;
    height:75px;
    border-radius:50%;
    background:#fdece6;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:32px;
    margin-bottom:20px;

}





@media(max-width:900px){

.sports-grid{

    grid-template-columns:1fr;

}

}




@media(max-width:600px){

.page-title{

    font-size:1.6rem;

}


.sports-card{

    padding:20px;

}


.sports-intro{

    font-size:.95rem;

}

}


</style>





<section class="sports-section">


<div class="sports-container">





<h1 class="page-title">

Sports

</h1>



<div class="orange-line"></div>







<p class="sports-intro">

Khwaja Yunus Ali University (KYAU) believes that sports and physical activities play an important role in developing teamwork, leadership, discipline, and a healthy lifestyle among students. The university encourages students to participate in different indoor and outdoor sports activities as part of campus life.

</p>









<div class="sports-card">


<div class="sports-icon">

🏆

</div>


<h3>

About KYAU Sports

</h3>


<p>

The KYAU Sports programme provides opportunities for students, faculty members, and staff to participate in recreational and competitive sporting activities. Through sports events and tournaments, the university promotes teamwork, sportsmanship, and student engagement.

</p>


</div>









<div class="sports-grid">





<div class="sports-card">


<h3>

Indoor Sports Facilities

</h3>


<ul>

<li>
Table Tennis.
</li>

<li>
Chess.
</li>

<li>
Carrom.
</li>

<li>
Indoor games and recreational activities.
</li>

</ul>


</div>








<div class="sports-card">


<h3>

Outdoor Sports Facilities

</h3>


<ul>

<li>
Football.
</li>

<li>
Cricket.
</li>

<li>
Badminton.
</li>

<li>
Basketball.
</li>

<li>
Volleyball.
</li>

</ul>


</div>






</div>









<div class="sports-card">


<h3>

Sports Activities & Tournaments

</h3>


<ul>

<li>
Inter-department sports competitions.
</li>

<li>
Annual university sports events.
</li>

<li>
Friendly matches and recreational activities.
</li>

<li>
Participation in inter-university competitions.
</li>

<li>
Student sports clubs and teams.
</li>

</ul>


</div>









<div class="sports-card">


<h3>

Student Participation

</h3>


<p>

KYAU encourages students to actively participate in sports activities to improve physical fitness, leadership skills, confidence, and teamwork. Students can develop their talents through regular practice and university sports programmes.

</p>


</div>









<div class="sports-card">


<h3>

Sports Development

</h3>


<p>

The university aims to continuously improve sports facilities and create more opportunities for students to participate in local, national, and inter-university sporting events.

</p>


</div>









<div class="sports-card">


<h3>

Upcoming Sports Events

</h3>


<p>

Information about upcoming tournaments, sports schedules, team selection, and registration procedures will be announced through official university notices.

</p>


</div>






</div>


</section>



@endsection