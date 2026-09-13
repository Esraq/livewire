@extends('layouts.app')

@section('content')


<style>

.admission-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.admission-container{
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





.admission-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-bottom:25px;
    transition:.3s;

}



.admission-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}




.admission-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.admission-card p,
.admission-card li{

    color:#555;
    line-height:1.9;

}



.admission-card ul{

    padding-left:20px;

}






.two-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;

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





<section class="admission-section">


<div class="admission-container">





<!-- Page Header -->


<h1 class="page-title">

Admission Information

</h1>


<div class="orange-line"></div>












<!-- Admission Process -->


<div class="admission-card">


<h3>
Admission Process
</h3>


<p>

Applicants can apply for admission by completing the application form and submitting the required documents to the Admission Office. Students may apply through the university admission process according to the requirements of their selected programme.

</p>


<ul>

<li>
Collect and complete the admission application form.
</li>

<li>
Submit academic documents and required information.
</li>

<li>
Complete admission formalities after selection.
</li>

<li>
Complete registration and payment procedures.
</li>


</ul>


</div>








<!-- Required Documents -->


<div class="admission-card">


<h3>
Required Documents
</h3>


<p>

Applicants must submit necessary academic documents during the admission process.

</p>


<ul>

<li>
SSC/O-Level certificate and transcript.
</li>

<li>
HSC/A-Level certificate and transcript.
</li>

<li>
Recent passport-size photographs.
</li>

<li>
National ID card/Birth certificate copy.
</li>

<li>
Other documents required by the university.
</li>


</ul>


</div>








<!-- Undergraduate Admission -->


<div class="admission-card">


<h3>
Undergraduate Admission
</h3>


<p>

Students seeking admission to undergraduate programmes must fulfill the academic requirements set by the university. Admission eligibility may vary depending on the selected programme. :contentReference[oaicite:2]{index=2}

</p>


<ul>

<li>
Completion of HSC or equivalent qualification.
</li>

<li>
Meeting minimum GPA requirements.
</li>

<li>
Submission of required academic documents.
</li>

</ul>


</div>







<!-- Graduate Admission -->


<div class="admission-card">


<h3>
Graduate Admission
</h3>


<p>

Candidates applying for graduate programmes must meet the academic qualifications specified for each programme. Admission requirements may vary depending on the department and degree level. :contentReference[oaicite:3]{index=3}

</p>


</div>







<!-- Admission Support -->


<div class="two-grid">


<div class="admission-card">


<h3>
Admission Office
</h3>


<p>

The Admission Office provides guidance regarding programme selection, application procedures, required documents, and admission-related queries.

</p>


</div>





<div class="admission-card">


<h3>
Important Notice
</h3>


<p>

Admission schedules, application deadlines, and other important announcements will be published through official university notices.

</p>


</div>



</div>







</div>


</section>



@endsection