@extends('layouts.app')

@section('content')


<style>

.policy-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.policy-container{
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



.intro{

    max-width:900px;
    margin:auto;
    text-align:justify;
    color:#555;
    line-height:1.9;
    font-size:1.02rem;

}





.policy-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-bottom:25px;
    transition:.3s;

}


.policy-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.policy-card h3{

    color:#e8552e;
    font-size:1.3rem;
    margin-bottom:15px;

}



.policy-card p,
.policy-card li{

    color:#555;
    line-height:1.9;

}



.policy-card ul{

    padding-left:20px;

}





@media(max-width:600px){

.page-title{
    font-size:1.6rem;
}

}


</style>




<section class="policy-section">


<div class="policy-container">



<!-- Header -->

<h1 class="page-title">

Academic Policy

</h1>


<div class="orange-line"></div>



<p class="intro">

Khwaja Yunus Ali University (KYAU) is committed to maintaining academic excellence through effective teaching, learning, evaluation, and quality assurance practices. The academic policies are designed to ensure transparency, fairness, discipline, and continuous improvement in academic activities.

</p>





<!-- Academic Standards -->


<div class="policy-card">


<h3>
1. Academic Standards
</h3>


<p>

The University maintains high academic standards by ensuring quality education, qualified faculty members, updated curriculum, research-based learning, and effective academic management.

</p>


<ul>

<li>
Courses are designed according to national and international academic standards.
</li>

<li>
Students must maintain satisfactory academic performance throughout their programme.
</li>

<li>
Regular class attendance and participation are essential components of academic success.
</li>

</ul>


</div>







<!-- Degree Requirements -->


<div class="policy-card">


<h3>
2. Graduation / Degree Requirements
</h3>


<p>

Students must successfully complete all required courses, credits, examinations, and other academic requirements specified by their respective programmes.

</p>


<ul>

<li>
Completion of required credit hours.
</li>

<li>
Achievement of minimum required CGPA.
</li>

<li>
Completion of internship, project, thesis, or research work where applicable.
</li>

<li>
Fulfillment of university rules and regulations.
</li>


</ul>


</div>







<!-- Evaluation Procedure -->


<div class="policy-card">


<h3>
3. Evaluation Procedures
</h3>


<p>

Student performance is evaluated through a combination of continuous assessment and final examinations.

</p>


<ul>

<li>
Class participation and attendance.
</li>

<li>
Assignments, presentations, quizzes, and laboratory performance.
</li>

<li>
Mid-term and final examinations.
</li>

<li>
Project and research evaluation where applicable.
</li>

</ul>


</div>







<!-- Examination Committee -->


<div class="policy-card">


<h3>
4. Formation of Examination Committee
</h3>


<p>

An Examination Committee is formed to ensure smooth and transparent examination management. The committee is responsible for examination planning, monitoring, evaluation coordination, and maintaining academic integrity.

</p>


<ul>

<li>
Preparation and management of examination schedules.
</li>

<li>
Ensuring proper examination procedures.
</li>

<li>
Maintaining confidentiality and fairness in evaluation.
</li>

</ul>


</div>








<!-- Grading Policy -->


<div class="policy-card">


<h3>
5. Grading Policy
</h3>


<p>

KYAU follows a systematic grading system to evaluate student academic performance. Grades are awarded based on marks obtained in courses and converted into grade points.

</p>


<ul>

<li>
A student's academic performance is measured through CGPA.
</li>

<li>
Grade points are calculated according to university-approved grading criteria.
</li>

<li>
Students must maintain the required CGPA for graduation.
</li>

</ul>


</div>







<!-- Academic Integrity -->


<div class="policy-card">


<h3>
6. Academic Integrity
</h3>


<p>

Students are expected to maintain honesty, responsibility, and ethical behavior in all academic activities. Academic misconduct, plagiarism, cheating, or any unfair practice may result in disciplinary action according to university rules.

</p>


</div>








<!-- Attendance Policy -->


<div class="policy-card">


<h3>
7. Attendance Policy
</h3>


<p>

Regular attendance is essential for successful completion of courses. Students must fulfill the minimum attendance requirement set by the university to participate in examinations.

</p>


</div>







</div>


</section>



@endsection