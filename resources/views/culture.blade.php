@extends('layouts.app')

@section('content')


<style>

.culture-section{

    padding:clamp(2.5rem,6vw,5rem) 0;
    background:#fff;

}


.culture-container{

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





.culture-intro{

    max-width:900px;
    margin:auto;
    text-align:justify;
    color:#555;
    line-height:1.9;
    font-size:1.02rem;

}





.culture-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}



.culture-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}




.culture-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}




.culture-card p,
.culture-card li{

    color:#555;
    line-height:1.9;

}



.culture-card ul{

    padding-left:20px;

}





.culture-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
    margin-top:25px;

}





.culture-icon{

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

.culture-grid{

    grid-template-columns:1fr;

}

}





@media(max-width:600px){

.page-title{

    font-size:1.6rem;

}


.culture-card{

    padding:20px;

}


.culture-intro{

    font-size:.95rem;

}

}


</style>





<section class="culture-section">


<div class="culture-container">





<h1 class="page-title">

Culture

</h1>



<div class="orange-line"></div>







<p class="culture-intro">

Khwaja Yunus Ali University (KYAU) encourages students to participate in cultural activities that develop creativity, confidence, leadership, and social awareness. The university provides opportunities for students to showcase their talents through music, dance, drama, art, literature, and cultural celebrations.

</p>









<div class="culture-card">


<div class="culture-icon">

🎭

</div>



<h3>

About Cultural Activities

</h3>


<p>

Cultural activities at KYAU create a vibrant campus environment where students can explore their creative abilities beyond academic learning. These activities promote teamwork, cultural appreciation, and personal development.

</p>


</div>









<div class="culture-grid">





<div class="culture-card">


<h3>

Cultural Events

</h3>


<ul>

<li>
Bengali New Year (Pohela Boishakh) celebration.
</li>

<li>
Language Martyrs' Day programmes.
</li>

<li>
Independence Day and Victory Day celebrations.
</li>

<li>
Cultural festivals and university programmes.
</li>

<li>
Music, dance, drama, and art exhibitions.
</li>

</ul>


</div>








<div class="culture-card">


<h3>

Student Participation

</h3>


<ul>

<li>
Opportunities to showcase creative talents.
</li>

<li>
Participation in cultural clubs and activities.
</li>

<li>
Development of communication and leadership skills.
</li>

<li>
Building friendship and teamwork among students.
</li>

</ul>


</div>






</div>









<div class="culture-card">


<h3>

Cultural Clubs & Activities

</h3>


<p>

KYAU encourages students to participate in cultural clubs and organize activities related to music, performing arts, literature, photography, debate, and creative expression.

</p>


</div>









<div class="culture-card">


<h3>

Celebrating Diversity

</h3>


<p>

The university promotes respect for cultural diversity by encouraging students from different backgrounds to share their traditions, ideas, and creativity in a supportive campus environment.

</p>


</div>









<div class="culture-card">


<h3>

Upcoming Cultural Programmes

</h3>


<p>

Information about upcoming cultural events, festivals, competitions, and student activities will be updated regularly.

</p>


</div>






</div>


</section>



@endsection