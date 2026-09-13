@extends('layouts.app')

@section('content')


<style>

.process-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.process-container{
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
}





.process-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-bottom:25px;
    transition:.3s;

}



.process-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.process-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.process-card p,
.process-card li{

    color:#555;
    line-height:1.9;

}


.process-card ul{

    padding-left:20px;

}




.step-number{

    display:inline-block;
    width:35px;
    height:35px;
    background:#e8552e;
    color:#fff;
    border-radius:50%;
    text-align:center;
    line-height:35px;
    margin-right:10px;

}



@media(max-width:600px){

.page-title{
font-size:1.6rem;
}

}


</style>




<section class="process-section">


<div class="process-container">



<h1 class="page-title">

Admission Process

</h1>


<div class="orange-line"></div>



<p class="intro">

Khwaja Yunus Ali University (KYAU) follows a simple and transparent admission process to ensure a smooth experience for prospective students. Applicants are required to complete the following steps for admission.

</p>







<div class="process-card">


<h3>

<span class="step-number">1</span>

Choose Programme

</h3>


<p>

Select your desired undergraduate or graduate programme according to your academic background and career goals.

</p>


</div>







<div class="process-card">


<h3>

<span class="step-number">2</span>

Submit Application

</h3>


<p>

Complete the admission application form with accurate personal and academic information and submit the required documents.

</p>


</div>







<div class="process-card">


<h3>

<span class="step-number">3</span>

Document Verification

</h3>


<p>

The university admission office will verify submitted certificates, transcripts, and other required documents.

</p>


</div>







<div class="process-card">


<h3>

<span class="step-number">4</span>

Admission Approval

</h3>


<p>

Selected applicants will receive admission confirmation according to university rules and programme requirements.

</p>


</div>







<div class="process-card">


<h3>

<span class="step-number">5</span>

Registration & Class Start

</h3>


<p>

Students complete registration procedures, pay required fees, and begin their academic journey at KYAU.

</p>


</div>





</div>

</section>


@endsection