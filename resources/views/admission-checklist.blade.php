@extends('layouts.app')

@section('content')


<style>

.check-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.check-container{
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





.check-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-bottom:25px;

}



.check-card h3{

    color:#e8552e;
    margin-bottom:15px;

}



.check-card li{

    color:#555;
    line-height:1.9;

}


.check-card ul{

    padding-left:20px;

}




</style>





<section class="check-section">


<div class="check-container">



<h1 class="page-title">

Admission Checklist

</h1>


<div class="orange-line"></div>






<div class="check-card">


<h3>

Before Applying

</h3>


<ul>

<li>
Select your preferred programme.
</li>

<li>
Check admission eligibility requirements.
</li>

<li>
Prepare necessary academic documents.
</li>

<li>
Review admission deadlines and notices.
</li>


</ul>


</div>







<div class="check-card">


<h3>

Required Documents

</h3>


<ul>

<li>
SSC/O-Level certificate and transcript.
</li>

<li>
HSC/A-Level certificate and transcript.
</li>

<li>
Bachelor certificate and transcript (for graduate applicants).
</li>

<li>
Recent passport-size photographs.
</li>

<li>
National ID card/Birth certificate copy.
</li>

<li>
Guardian NID copy.
</li>

<li>
Other documents required by the university.
</li>


</ul>


</div>







<div class="check-card">


<h3>

After Selection

</h3>


<ul>

<li>
Collect admission confirmation.
</li>

<li>
Complete admission payment.
</li>

<li>
Submit final documents.
</li>

<li>
Complete course registration.
</li>

<li>
Attend orientation programme.
</li>


</ul>


</div>







<div class="check-card">


<h3>

Important Reminder

</h3>


<p style="color:#555;line-height:1.8;">

Applicants should ensure that all information and documents submitted during admission are accurate and complete. Any incorrect information may affect admission status.

</p>


</div>






</div>


</section>



@endsection