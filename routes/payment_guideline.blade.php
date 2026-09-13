@extends('layouts.app')

@section('content')


<style>

.payment-section{
padding:clamp(2.5rem,6vw,5rem) 0;
}


.payment-container{

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



.payment-card{

border:1px solid #e2e2e2;
border-radius:10px;
padding:25px;
background:#fff;
margin-bottom:25px;

}


.payment-card h3{

color:#e8552e;
margin-bottom:15px;

}


.payment-card p,
.payment-card li{

color:#555;
line-height:1.9;

}


.payment-card ul{

padding-left:20px;

}

</style>





<section class="payment-section">


<div class="payment-container">


<h1 class="page-title">

Payment Guideline

</h1>


<div class="orange-line"></div>





<div class="payment-card">


<h3>

Admission Payment

</h3>


<p>

Students must complete admission-related payments according to the university admission schedule. Payment confirmation is required to complete the admission process.

</p>


<ul>

<li>
Admission fee payment.
</li>

<li>
Required registration charges.
</li>

<li>
Initial semester payment according to programme requirements.
</li>

</ul>


</div>







<div class="payment-card">


<h3>

Tuition Fee Payment

</h3>


<ul>

<li>
Students should pay tuition fees according to the university payment schedule.
</li>

<li>
Fees may be paid through approved university payment methods.
</li>

<li>
Students must keep payment receipts for future reference.
</li>

<li>
Outstanding dues may affect registration or academic services.
</li>


</ul>


</div>







<div class="payment-card">


<h3>

Semester Payment Guideline

</h3>


<ul>

<li>
Complete semester registration before the payment deadline.
</li>

<li>
Pay applicable semester fees within the announced period.
</li>

<li>
Late payment may require additional charges according to university rules.
</li>


</ul>


</div>







<div class="payment-card">


<h3>

Payment Confirmation

</h3>


<p>

After completing payment, students should verify their payment status with the concerned university office and preserve all payment documents.

</p>


</div>







<div class="payment-card">


<h3>

Important Notice

</h3>


<p>

Payment schedules, fees, and procedures may change according to university policy. Students are advised to follow official notices for updated information.

</p>


</div>





</div>


</section>



@endsection