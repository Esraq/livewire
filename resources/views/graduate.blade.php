@extends('layouts.app')

@section('content')


<style>

.graduate-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.graduate-container{
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





.graduate-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-bottom:25px;
    transition:.3s;

}



.graduate-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.graduate-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.graduate-card p,
.graduate-card li{

    color:#555;
    line-height:1.9;

}



.graduate-card ul{

    padding-left:20px;

}





.program-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;

}




.program-box{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;

}



.program-box h3{

    color:#e8552e;
    margin-bottom:15px;

}



.program-box li{

    color:#555;
    line-height:1.8;

}



@media(max-width:900px){

.program-grid{
    grid-template-columns:1fr;
}

}



@media(max-width:600px){

.page-title{
    font-size:1.6rem;
}

}


</style>





<section class="graduate-section">


<div class="graduate-container">





<h1 class="page-title">

Graduate Program

</h1>


<div class="orange-line"></div>





<p class="intro">

Khwaja Yunus Ali University (KYAU) offers graduate programmes designed to provide advanced knowledge, professional skills, and research opportunities. These programmes help students develop expertise in their respective fields and prepare them for academic, professional, and research careers.

</p>








<!-- Admission Criteria -->


<div class="graduate-card">


<h3>
Admission Criteria
</h3>


<p>

Candidates applying for graduate programmes must fulfill the academic requirements specified by the university.

</p>


<ul>

<li>
Candidate must have a minimum CGPA of 2.00 at the undergraduate level.
</li>

<li>
Candidate must have a minimum CGPA of 2.50 at the SSC/HSC or equivalent level.
</li>

<li>
Applicants must submit all required academic documents during admission.
</li>

<li>
Additional requirements may apply depending on the selected programme.
</li>


</ul>


</div>







<!-- Graduate Programmes -->


<h2 class="page-title" style="margin-top:50px;">

Available Graduate Programmes

</h2>


<div class="orange-line"></div>





<div class="program-grid">





<div class="program-box">


<h3>

Faculty of Science & Engineering

</h3>


<ul>

<li>
M.Sc. in Mechatronics and Micro-mechatronics Engineering
</li>

<li>
M.S. in Medical Physics
</li>

</ul>


</div>






<div class="program-box">


<h3>

Faculty of Business Studies

</h3>


<ul>

<li>
Master of Business Administration (MBA)
</li>

<li>
Executive Master of Business Administration (EMBA)
</li>

</ul>


</div>






<div class="program-box">


<h3>

Faculty of Human Science

</h3>


<ul>

<li>
Master of Arts in English (ELT)
</li>

<li>
Master of Arts in Islamic Studies
</li>

<li>
Master of Library & Information Science (M.LIS)
</li>

</ul>


</div>






<div class="program-box">


<h3>

Faculty of Law

</h3>


<ul>

<li>
Master of Law (LLM)
</li>

</ul>


</div>





</div>







<!-- Application Process -->


<div class="graduate-card" style="margin-top:35px;">


<h3>
Application Procedure
</h3>


<ul>

<li>
Complete the graduate admission application form.
</li>

<li>
Submit required academic certificates and transcripts.
</li>

<li>
Complete admission formalities after approval.
</li>

<li>
Register for courses according to university guidelines.
</li>

</ul>


</div>







<!-- Contact -->


<div class="graduate-card">


<h3>
Graduate Admission Support
</h3>


<p>

For admission-related information, applicants may contact the university admission office or visit the official university website for updated notices and schedules.

</p>


</div>






</div>


</section>



@endsection