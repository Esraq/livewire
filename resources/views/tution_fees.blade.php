@extends('layouts.app')

@section('content')


<style>

.fee-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.fee-container{
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





.fee-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}



.fee-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.fee-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.fee-card p,
.fee-card li{

    color:#555;
    line-height:1.9;

}



.fee-card ul{

padding-left:20px;

}





@media(max-width:600px){

.page-title{

font-size:1.6rem;

}

}


</style>





<section class="fee-section">


<div class="fee-container">





<h1 class="page-title">

Tuition Fee

</h1>


<div class="orange-line"></div>




<p class="intro">

Khwaja Yunus Ali University (KYAU) provides quality higher education with a structured and transparent fee system. Students are required to complete admission, registration, tuition, and other applicable payments according to university guidelines.

</p>







<div class="fee-card">


<h3>

Admission Fee

</h3>


<ul>

<li>
Students must pay the admission fee during the admission confirmation process.
</li>

<li>
Admission payment must be completed within the announced deadline.
</li>

<li>
Payment receipts should be preserved for future reference.
</li>


</ul>


</div>








<div class="fee-card">


<h3>

Tuition Fee

</h3>


<ul>

<li>
Tuition fees are payable according to the semester schedule.
</li>

<li>
Students must complete payments before registration deadlines.
</li>

<li>
Outstanding dues may affect academic services and registration.
</li>


</ul>


</div>








<div class="fee-card">


<h3>

Other Academic Fees

</h3>


<ul>

<li>
Laboratory fees (where applicable).
</li>

<li>
Library and student service charges.
</li>

<li>
Examination and other university-approved fees.
</li>


</ul>


</div>








<div class="fee-card">


<h3>

Payment Guidelines

</h3>


<ul>

<li>
Students should follow official payment schedules.
</li>

<li>
Payments should be made through approved university channels.
</li>

<li>
All payment records should be maintained carefully.
</li>


</ul>


</div>







<div class="fee-card">


<h3>

Important Notice

</h3>


<p>

Tuition fees and related charges may vary depending on programme requirements and university policy. Students are advised to check official notices for updated information.

</p>


</div>





</div>


</section>



@endsection