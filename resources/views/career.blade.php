@extends('layouts.app')

@section('content')


<style>

.career-section{

    padding:clamp(2.5rem,6vw,5rem) 0;
    background:#fff;

}


.career-container{

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





.career-intro{

    max-width:900px;
    margin:auto;
    text-align:justify;
    color:#555;
    line-height:1.9;
    font-size:1.02rem;

}





.career-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}



.career-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.career-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.career-card p,
.career-card li{

    color:#555;
    line-height:1.9;

}



.career-card ul{

    padding-left:20px;

}





.career-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
    margin-top:25px;

}





.career-icon{

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

.career-grid{

    grid-template-columns:1fr;

}

}



@media(max-width:600px){

.page-title{

    font-size:1.6rem;

}


.career-card{

    padding:20px;

}


.career-intro{

    font-size:.95rem;

}

}

</style>





<section class="career-section">


<div class="career-container">





<h1 class="page-title">

Career

</h1>



<div class="orange-line"></div>







<p class="career-intro">

Khwaja Yunus Ali University (KYAU) offers exciting career opportunities for qualified individuals who are passionate about teaching, research, administration, and supporting higher education. The university seeks talented professionals who can contribute to academic excellence and institutional development.

</p>









<div class="career-card">


<div class="career-icon">

💼

</div>



<h3>

Career Opportunities at KYAU

</h3>


<p>

KYAU provides opportunities for faculty members, researchers, administrative professionals, and support staff to build a rewarding career in a dynamic academic environment.

</p>


</div>









<div class="career-grid">





<div class="career-card">


<h3>

Faculty Career

</h3>


<ul>

<li>
Teaching positions in different academic departments.
</li>

<li>
Research opportunities for qualified faculty members.
</li>

<li>
Academic leadership and professional development opportunities.
</li>

<li>
Contribution to teaching and innovation.
</li>

</ul>


</div>








<div class="career-card">


<h3>

Administrative Career

</h3>


<ul>

<li>
Opportunities in university administration.
</li>

<li>
Human resource and student support services.
</li>

<li>
Finance, IT, library, and operational positions.
</li>

<li>
Professional growth opportunities.
</li>

</ul>


</div>






</div>









<div class="career-card">


<h3>

Current Job Opportunities

</h3>


<p>

Available faculty and administrative vacancies will be published here regularly. Interested candidates can check available positions and apply according to the job requirements.

</p>


</div>









<div class="career-card">


<h3>

Application Process

</h3>


<ul>

<li>
Review available job circulars and requirements.
</li>

<li>
Prepare an updated CV and required documents.
</li>

<li>
Submit application according to the instructions provided.
</li>

<li>
Shortlisted candidates will be contacted for further selection procedures.
</li>

</ul>


</div>









<div class="career-card">


<h3>

Why Join KYAU?

</h3>


<ul>

<li>
Supportive academic environment.
</li>

<li>
Opportunities for research and professional growth.
</li>

<li>
Collaboration with talented faculty and professionals.
</li>

<li>
Contribution to higher education development.
</li>

</ul>


</div>









<div class="career-card">


<h3>

Career Portal

</h3>


<p>

KYAU Career Portal will provide updated job openings, application guidelines, and recruitment information for interested applicants.

</p>


</div>








</div>


</section>



@endsection