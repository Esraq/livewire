@extends('layouts.app')

@section('content')


<style>

.waiver-section{

padding:clamp(2.5rem,6vw,5rem) 0;

}


.waiver-container{

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




.waiver-card{

border:1px solid #e2e2e2;
border-radius:10px;
padding:25px;
background:#fff;
margin-bottom:25px;
transition:.3s;

}



.waiver-card:hover{

box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.waiver-card h3{

color:#e8552e;
margin-bottom:15px;

}



.waiver-card p,
.waiver-card li{

color:#555;
line-height:1.9;

}



.waiver-card ul{

padding-left:20px;

}

</style>





<section class="waiver-section">


<div class="waiver-container">





<h1 class="page-title">

Tuition Fee Waiver

</h1>


<div class="orange-line"></div>





<div class="waiver-card">


<h3>

Overview

</h3>


<p>

Khwaja Yunus Ali University (KYAU) provides tuition fee waiver opportunities to support deserving and meritorious students. Waiver policies are designed to encourage academic excellence and provide financial assistance to eligible students.

</p>


</div>








<div class="waiver-card">


<h3>

Eligibility Criteria

</h3>


<ul>

<li>
Outstanding academic performance.
</li>

<li>
Meeting university-defined academic requirements.
</li>

<li>
Maintaining required CGPA during study period.
</li>

<li>
Fulfillment of waiver policy conditions.
</li>


</ul>


</div>








<div class="waiver-card">


<h3>

Types of Waiver

</h3>


<ul>

<li>
Merit-based tuition fee waiver.
</li>

<li>
Special category waiver according to university policy.
</li>

<li>
Other approved financial assistance programmes.
</li>


</ul>


</div>








<div class="waiver-card">


<h3>

Continuation of Waiver

</h3>


<ul>

<li>
Students must maintain required academic performance.
</li>

<li>
Students must follow university rules and regulations.
</li>

<li>
Waiver benefits may be reviewed according to academic progress.
</li>


</ul>


</div>








<div class="waiver-card">


<h3>

Application Process

</h3>


<ul>

<li>
Submit waiver application according to university instructions.
</li>

<li>
Provide required academic documents.
</li>

<li>
Wait for approval from the appropriate university authority.
</li>


</ul>


</div>







<div class="waiver-card">


<h3>

Important Notice

</h3>


<p>

Tuition fee waiver policies, eligibility criteria, and benefits may change according to university decisions. Students should follow official announcements for updated information.

</p>


</div>






</div>


</section>



@endsection