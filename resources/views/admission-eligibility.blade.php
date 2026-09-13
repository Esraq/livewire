@extends('layouts.app')

@section('content')


<style>

.eligibility-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.eligibility-container{
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





.eligibility-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}



.eligibility-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}




.eligibility-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}




.eligibility-card p,
.eligibility-card li{

    color:#555;
    line-height:1.9;

}



.eligibility-card ul{

    padding-left:20px;

}






.two-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
    margin-top:40px;

}





@media(max-width:900px){

.two-grid{

    grid-template-columns:1fr;

}

}



@media(max-width:600px){

.page-title{

    font-size:1.6rem;

}

}



</style>





<section class="eligibility-section">


<div class="eligibility-container">





<!-- Header -->


<h1 class="page-title">

Admission Eligibility

</h1>



<div class="orange-line"></div>





<p class="intro">

Khwaja Yunus Ali University (KYAU) welcomes students who wish to pursue higher education in a quality academic environment. Applicants must fulfill the eligibility requirements specified by the university for their selected programme before applying for admission.

</p>







<!-- Undergraduate Eligibility -->


<div class="eligibility-card">


<h3>

Undergraduate Programme Eligibility

</h3>



<p>

Applicants seeking admission to undergraduate programmes must meet the following academic requirements:

</p>



<ul>

<li>
The applicant must have completed SSC and HSC or equivalent examinations.
</li>


<li>
Applicants must have a minimum GPA of 2.50 or equivalent grade in each level of SSC and HSC or equivalent examinations.
</li>


<li>
Students from O-Level and A-Level backgrounds must fulfill equivalent academic requirements.
</li>


<li>
Applicants must submit all required academic certificates and documents during admission.
</li>


<li>
Final admission approval will be provided according to university admission rules.
</li>


</ul>


</div>








<!-- Graduate Eligibility -->


<div class="eligibility-card">


<h3>

Graduate Programme Eligibility

</h3>



<p>

Candidates applying for graduate programmes must have the required academic qualifications from a recognized institution.

</p>



<ul>


<li>
Applicants must have a Bachelor's degree or equivalent qualification.
</li>


<li>
Candidates must satisfy programme-specific academic requirements.
</li>


<li>
Required certificates, transcripts, and supporting documents must be submitted.
</li>


<li>
Admission may require additional evaluation depending on the programme.
</li>


</ul>


</div>








<!-- International Student -->


<div class="eligibility-card">


<h3>

International Student Eligibility

</h3>



<ul>

<li>
International qualifications will be evaluated according to university guidelines.
</li>


<li>
Applicants must submit equivalent academic certificates and transcripts.
</li>


<li>
Additional documents may be required during the admission process.
</li>


</ul>


</div>








<!-- Important Notice -->


<div class="eligibility-card">


<h3>

Important Notice

</h3>



<p>

Meeting the minimum eligibility criteria does not guarantee admission. Final admission decisions are made according to university rules, available seats, and programme requirements.

</p>


</div>






</div>


</section>



@endsection