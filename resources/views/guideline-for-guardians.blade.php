@extends('layouts.app')

@section('content')


<style>

.guardian-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.guardian-container{
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





.guardian-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}



.guardian-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}




.guardian-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.guardian-card p,
.guardian-card li{

    color:#555;
    line-height:1.9;

}



.guardian-card ul{

    padding-left:20px;

}





@media(max-width:600px){

.page-title{

    font-size:1.6rem;

}

}


</style>





<section class="guardian-section">


<div class="guardian-container">





<h1 class="page-title">

Guideline for Guardians

</h1>



<div class="orange-line"></div>





<p class="intro">

Khwaja Yunus Ali University (KYAU) believes that guardians play an important role in supporting students throughout their academic journey. Cooperation between the university, students, and guardians helps ensure academic success, personal development, and a positive learning environment.

</p>








<div class="guardian-card">


<h3>

1. Academic Support

</h3>


<ul>

<li>
Encourage students to attend classes regularly and participate actively in academic activities.
</li>

<li>
Support students in maintaining good academic performance and completing coursework on time.
</li>

<li>
Motivate students to develop effective study habits and professional skills.
</li>

</ul>


</div>








<div class="guardian-card">


<h3>

2. Communication with University

</h3>


<ul>

<li>
Guardians should maintain proper communication with the university when necessary.
</li>

<li>
Stay informed about academic progress, notices, and important announcements.
</li>

<li>
Contact the concerned department or office for official academic matters.
</li>

</ul>


</div>








<div class="guardian-card">


<h3>

3. Student Discipline and Responsibility

</h3>


<ul>

<li>
Encourage students to follow university rules and regulations.
</li>

<li>
Help students maintain discipline, ethical behavior, and respect for others.
</li>

<li>
Support responsible use of university facilities and resources.
</li>

</ul>


</div>








<div class="guardian-card">


<h3>

4. Attendance and Academic Progress

</h3>


<ul>

<li>
Guardians should encourage regular class attendance.
</li>

<li>
Monitor students' academic progress and encourage improvement when required.
</li>

<li>
Discuss academic challenges with students and provide necessary support.
</li>

</ul>


</div>








<div class="guardian-card">


<h3>

5. Financial Responsibilities

</h3>


<ul>

<li>
Ensure timely payment of tuition fees and other university charges.
</li>

<li>
Keep records of payment receipts and financial documents.
</li>

<li>
Follow official university payment schedules.
</li>

</ul>


</div>








<div class="guardian-card">


<h3>

6. Student Safety and Well-being

</h3>


<ul>

<li>
Support students in maintaining physical and mental well-being.
</li>

<li>
Encourage positive relationships and healthy academic practices.
</li>

<li>
Inform the university regarding any important concerns affecting student performance.
</li>

</ul>


</div>








<div class="guardian-card">


<h3>

Important Notice

</h3>


<p>

Guardians are encouraged to work collaboratively with KYAU to create a supportive environment where students can achieve academic excellence and develop into responsible professionals.

</p>


</div>







</div>


</section>



@endsection