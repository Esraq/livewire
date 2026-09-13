@extends('layouts.app')

@section('content')


<style>

.page-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.container-custom{
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



.info-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}


.info-card:hover{

box-shadow:0 10px 25px rgba(0,0,0,.08);

}


.info-card h3{

color:#e8552e;
font-size:1.25rem;
margin-bottom:15px;

}


.info-card p,
.info-card li{

color:#555;
line-height:1.9;

}


.info-card ul{

padding-left:20px;

}


</style>




<section class="page-section">


<div class="container-custom">


<h1 class="page-title">

Credit Transfer

</h1>


<div class="orange-line"></div>




<p class="intro">

Khwaja Yunus Ali University (KYAU) provides opportunities for eligible students to transfer previously completed academic credits from recognized institutions. Credit transfer is evaluated carefully to ensure academic quality and course equivalency.

</p>







<div class="info-card">


<h3>

Eligibility for Credit Transfer

</h3>


<ul>

<li>
Students must have completed courses from a recognized university/institution.
</li>

<li>
Transferred courses must match the curriculum requirements of the selected KYAU programme.
</li>

<li>
The course content, credit hours, and learning outcomes will be reviewed.
</li>

<li>
Final approval will be provided by the relevant academic authority.
</li>

</ul>


</div>







<div class="info-card">


<h3>

Credit Transfer Criteria

</h3>


<ul>

<li>
Courses with acceptable academic performance may be considered for transfer.
</li>

<li>
A minimum grade requirement must be fulfilled according to university policy.
</li>

<li>
KYAU Equivalence Committee will evaluate course equivalency before approval.
</li>

<li>
Only approved credits will be counted toward degree completion.
</li>


</ul>


</div>







<div class="info-card">


<h3>

Required Documents

</h3>


<ul>

<li>
Official transcript from previous institution.
</li>

<li>
Course syllabus and course description.
</li>

<li>
Certificate/academic records.
</li>

<li>
Credit transfer application form.
</li>

<li>
Other documents required by the university.
</li>


</ul>


</div>







<div class="info-card">


<h3>

Approval Process

</h3>


<ul>

<li>
Submission of credit transfer application.
</li>

<li>
Academic review of submitted courses.
</li>

<li>
Evaluation by department and equivalence committee.
</li>

<li>
Final approval and credit adjustment.
</li>


</ul>


</div>






</div>


</section>



@endsection