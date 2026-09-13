@extends('layouts.app')

@section('content')


<style>

.requirement-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.requirement-container{
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





.requirement-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-bottom:25px;
    transition:.3s;

}



.requirement-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.requirement-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.requirement-card p,
.requirement-card li{

    color:#555;
    line-height:1.9;

}



.requirement-card ul{

    padding-left:20px;

}





@media(max-width:600px){

.page-title{
    font-size:1.6rem;
}

}


</style>





<section class="requirement-section">


<div class="requirement-container">





<h1 class="page-title">

Admission Requirements

</h1>


<div class="orange-line"></div>




<p class="intro">

Students seeking admission to Khwaja Yunus Ali University (KYAU) must fulfill the academic qualifications and submit the required documents according to university admission guidelines. Admission requirements may vary depending on the programme selected by the applicant.

</p>







<!-- Undergraduate Requirement -->


<div class="requirement-card">


<h3>
Undergraduate Admission Requirements
</h3>


<p>

Applicants who wish to enroll in undergraduate programmes must satisfy the following requirements:

</p>


<ul>

<li>
Completion of HSC/A-Level or equivalent qualification.
</li>

<li>
Minimum academic qualification as specified by the respective programme.
</li>

<li>
Submission of academic certificates and mark sheets.
</li>

<li>
Successful completion of the admission process.
</li>


</ul>


</div>








<!-- Graduate Requirement -->


<div class="requirement-card">


<h3>
Graduate Admission Requirements
</h3>


<p>

Applicants applying for graduate programmes must have the required undergraduate qualification from a recognized institution.

</p>


<ul>

<li>
Completion of Bachelor's degree or equivalent qualification.
</li>

<li>
Meeting programme-specific academic requirements.
</li>

<li>
Submission of previous academic records.
</li>

<li>
Approval through the university admission process.
</li>


</ul>


</div>








<!-- Required Documents -->


<div class="requirement-card">


<h3>
Required Documents
</h3>


<p>

Applicants must submit the following documents during admission:

</p>


<ul>

<li>
Attested photocopies of all academic certificates.
</li>

<li>
Attested photocopies of mark sheets/transcripts.
</li>

<li>
Testimonials or character certificates.
</li>

<li>
Three recent passport-size photographs.
</li>

<li>
Birth certificate or National ID card copy.
</li>

<li>
Guardian's National ID card copy.
</li>

<li>
Other documents required by the university.
</li>


</ul>


</div>








<!-- Application Requirement -->


<div class="requirement-card">


<h3>
Application Requirements
</h3>


<ul>

<li>
Complete the admission application form correctly.
</li>

<li>
Provide accurate personal and academic information.
</li>

<li>
Submit all required documents within the admission deadline.
</li>

<li>
Complete admission fees and registration procedures after selection.
</li>


</ul>


</div>








<!-- Important Notice -->


<div class="requirement-card">


<h3>
Important Notice
</h3>


<p>

Admission requirements, eligibility criteria, and application procedures may change according to university policy and programme regulations. Applicants are advised to check the latest admission notices before applying.

</p>


</div>






</div>


</section>



@endsection